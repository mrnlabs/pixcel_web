<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Services\CartService;
use App\Services\PayfastService;
use App\Http\Requests\PlanRequest;

class PayfastController extends Controller
{

    public PayfastService $payfastService;
   
    public function __construct(PayfastService $payfastService = null) {
        $this->payfastService = $payfastService;
    }
    public function initiate(Request $request)
    {
        //remember to validate request
        try{
           $payFastGeneratedHtml = $this->payfastService->pay($request);
           return Inertia::render('Checkout/PayfastForm', ['payFastGeneratedHtml' => $payFastGeneratedHtml]);
        } catch(\Exception $e){
            throw $e;
        }
    }

    function cancel() {
        dd('cancel');
    }
    public function return(Request $request){
        dd($request);
    }
    public function notify(Request $request)
    {
        //remember to validate request
        try{
            // $this->payfastService->notify();
            return 'success';
        } catch(\Exception $e){
            throw $e;
        }
    }

  
}
