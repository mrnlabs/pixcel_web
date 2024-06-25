<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PayfastController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\SubscriptionController;
use App\Services\QRCodeService;

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

    Route::get('/dashboard', function (){
        return Inertia::render('Dashboard');
    });

    Route::get('/', function (){
        return Inertia::render('Events/Events');
    });


    Route::get('/events', [EventController::class, 'index'])->name('events');
    Route::get('/create-event', [EventController::class, 'create'])->name('create_event');
    Route::post('/create-event', [EventController::class, 'store']);
    Route::get('/event/{id}', [EventController::class, 'show'])->name('event');
    Route::delete('/event/{id}', [EventController::class, 'destroy'])->name('delete_event');
    Route::post('/duplicate-event/{id}', [EventController::class, 'duplicate'])->name('duplicate_event');

    //event gallery
    Route::get('/event-gallery/{id}', [EventController::class, 'gallery'])->name('event-gallery');

    //profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('update_profile');
    Route::post('/update-profile-picture/{type}', [ProfileController::class, 'updatePicture'])->name('update_pro_pic');

    //subscriptions
    Route::get('/subscriptions', [SubscriptionController::class, 'index'])->name('subscriptions');
    Route::get('/view-subscription', [SubscriptionController::class, 'show']);


    //plans
    Route::get('/plans', [PlanController::class, 'index'])->name('plans');
    Route::post('/create-plan', [PlanController::class, 'store'])->name('create_plan');
});


    Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
    Route::get('/add-to-cart', [PricingController::class, 'addToCart'])->name('addToCart');

    Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');

    Route::post('/place-order', [PayfastController::class, 'initiate'])->name('initiate');
    Route::get('/return', [PayfastController::class, 'return'])->name('return');
    Route::get('/cancel', [PayfastController::class, 'cancel'])->name('cancel');
    Route::post('/notify', [PayfastController::class, 'notify'])->name('notify');


require __DIR__.'/auth.php';
