<?php

namespace App\Services;

use App\Models\Event;

class EventService
{
    public function getEvents()
    {
        return Event::all();
    }

    public function getEvent($eventId)
    {
        return Event::find($eventId);
    }

    public function createEvent(array $data)
    {
//        add user id
        $data['user_id'] = auth()->user()->id;
        $event = Event::create($data);
        return $event;
    }

    public function updateEvent(array $data)
    {
        Event::find($data['id'])->update($data);
        return "Event updated successfully!";
    }

    function duplicate($id) {
        $event = Event::find($id);
       return $event->replicate()->save();
    }
    public function deleteEvent($eventId)
    {
        // Find the event
        $event = Event::find($eventId);

        if (!$event) {
            // Event not found
            return false;
        }

        // Delete the event
        $event->delete();

        return true;
    }
}
