<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CoffeeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum','dapat'])->get('/user', function (Request $request) {
    return $request->user();

});

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('coffee', CoffeeController::class);
    Route::get('Welcome',[CoffeeController::class,'hello']);
    Route::get('coffees', [CoffeeController::class, 'index']);
    Route::post('coffee', [CoffeeController::class, 'store']);
    Route::get('coffeefinds/{id}', [CoffeeController::class, 'show']);
    Route::put('coffeeupdate/{id}',[CoffeeController::class, 'update']);
    Route::delete('coffeedelete/{id}', [CoffeeController::class, 'destroy']);
    // Route::apiResource('coffee', CoffeeController::class);
});
