<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DriversController;
use App\Http\Controllers\FleetsController;
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
Route::post('register', [AuthController::class, 'register']);
Route::post('login',  [AuthController::class, 'login']);
Route::group(['middleware' => 'auth:sanctum'], function () {
    // 查詢所有球隊
    Route::get('fleets', [FleetsController::class, 'api_fleets']);
    // 修改指定球隊
    Route::patch('fleets', [FleetsController::class, 'api_update']);
    // 刪除指定球隊
    Route::delete('fleets', [FleetsController::class, 'api_delete']);
    // 查詢所有球員
    Route::get('drivers', [DriversController::class, 'api_drivers']);
    // 修改指定球員
    Route::patch('drivers', [DriversController::class, 'api_update']);
    // 刪除指定球員
    Route::delete('drivers', [DriversController::class, 'api_delete']);

});