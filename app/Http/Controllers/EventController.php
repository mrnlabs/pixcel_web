<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\CreateSharingSettingsRequest;
use App\Http\Requests\CreateVideoSettingsRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Services\EventService;
use App\Services\SharingSettingsService;
use App\Services\VideoSettingsService;
use Inertia\Inertia;

class EventController extends Controller
{

    protected  EventService $eventService;
    protected VideoSettingsService $videoSettingsService;
    protected SharingSettingsService $sharingSettingService;
    public function __construct(EventService $eventService, VideoSettingsService $videoSettingsService, SharingSettingsService $sharingSettingService)

    {
        $this->eventService = $eventService;
        $this->videoSettingsService = $videoSettingsService;
        $this->sharingSettingService = $sharingSettingService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
           $events =  $this->eventService->getEvents();
            return Inertia::render('Event/Index', ['events' => $events]);
        } catch (\Exception $e){
            return Inertia::render('Error', ['message' => $e->getMessage()]);
        }

    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateEventRequest $createEventRequest,
                          CreateVideoSettingsRequest $createVideoSettingsRequest,
                          CreateSharingSettingsRequest $createSharingSettingsRequest
    )
    {
        try{
            $new_event = $this->eventService->createEvent($createEventRequest->validated());
            if($new_event){
                $createVideoSettingsRequest['event_id'] = $new_event->id;
                $createSharingSettingsRequest['event_id'] = $new_event->id;
                $this->videoSettingsService->createVideoSettings($createVideoSettingsRequest->validated());
                $this->sharingSettingService->createSharingSettings($createSharingSettingsRequest->validated());
            }
            return redirect()->route('event.index');
        } catch (\Exception $e){
            return Inertia::render('Error', ['message' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try{
            $event =  $this->eventService->getEvent($id);
            return Inertia::render('Event/Show', ['event' => $event]);
        } catch (\Exception $e){
            return Inertia::render('Error', ['message' => $e->getMessage()]);
        }
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $updateEventRequest,
                           CreateSharingSettingsRequest $updateSharingSettingsRequest,
                           CreateVideoSettingsRequest $updateVideoRequest,
                           $id)
    {
        try{
            $this->eventService->updateEvent($updateEventRequest->validated());
            //update videoSettings and sharingSettings
            $this->sharingSettingService->updateSharingSettings($id, $updateSharingSettingsRequest->validated());
            $this->videoSettingsService->updateVideoSettings($id, $updateVideoRequest->validated());
            return redirect()->route('event.index');
        } catch (\Exception $e){
            return Inertia::render('Error', ['message' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try{
            $this->eventService->deleteEvent($id);
            return redirect()->route('event.index');
        } catch (\Exception $e){
            return Inertia::render('Error', ['message' => $e->getMessage()]);
        }
    }
}
