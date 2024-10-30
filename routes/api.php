<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/test', function(Request $request){

    return response()->json(['message' => 'Testing'], 400);
});
Route::post('/sample-upload', function(Request $request){
    $request->validate([
        // 'video' => 'required|file|mimes:jpg,png,jpeg,gif|max:2048', // Adjust as needed
    ]);

    // Store the file
    if ($request->file('video')) {
        // Store the video in the 'uploads' directory inside storage/app
        $filePath = $request->file('video')->store('uploads');
        
        // Return a response with the file path
        return response()->json([
            'message' => 'Video uploaded successfully',
            'path' => $filePath
        ], 200);
    }

    return response()->json(['message' => 'No file uploaded'], 400);
});

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
