<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanRequest;
use App\Models\Plan;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PricingController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try{
            $plans = Plan::latest()->get();
           return Inertia::render('Pricing/Pricing', ['plans' => $plans]);
        } catch(\Exception $e){
            return Inertia::render('Error', ['message' => $e->getMessage()]);
        }
    }

   
    public function destroy(string $id)
    {
        //
    }
}
