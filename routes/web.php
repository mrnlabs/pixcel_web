<?php

use App\Http\Controllers\SubscriptionController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return Inertia::render('Auth/Login', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//});



Route::middleware('auth')->group(function () {

    Route::get('/events', [EventController::class, 'index'])->name('events');
    Route::get('/create-event', function () {return Inertia::render('Events/CreateEvent');});
    Route::post('/create-event', [EventController::class, 'store']);
    Route::get('/event/{id}', [EventController::class, 'show'])->name('event');

    //event gallery
    Route::get('/event-gallery/{id}', [EventController::class, 'gallery'])->name('event-gallery');

    //profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');

    //subscriptions
    Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions');
});

require __DIR__.'/auth.php';
