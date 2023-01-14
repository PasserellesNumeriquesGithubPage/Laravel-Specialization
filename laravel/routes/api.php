<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipmentController;
use App\Models\Equipment;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getAllData',[EquipmentController::class,'fetchData']);
Route::post("store",[EquipmentController::class,'store']);
Route::get('show/{id}',[EquipmentController::class,'show']);
Route::put('update/{id}',[EquipmentController::class,'update']);
Route::delete('delete/{id}',[EquipmentController::class,'destroy']);
