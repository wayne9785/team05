<?php

use App\Http\Controllers\DriversController;
use App\Http\Controllers\FleetsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect('drivers');
});

Route::get('drivers', [DriversController::class, 'index'])->name('drivers.index');
Route::get('drivers/{id}', [DriversController::class, 'show'])->where('id', '[0-9]+')->name('drivers.show');
Route::get('drivers/create',[DriversController::class,'create'])->name('drivers.create');
Route::delete('drivers/delete/{id}', [DriversController::class, 'destroy'])->where('id', '[0-9]+')->name('drivers.destroy');

Route::get('fleets', [FleetsController::class, 'index'])->name('fleets.index');
Route::get('fleets/{id}', [FleetsController::class, 'show'])->where('id', '[0-9]+')->name('fleets.show');
Route::get('fleets/create',[FleetsController::class,'create'])->name('fleets.create');
Route::delete('fleets/delete/{id}', [FleetsController::class, 'destroy'])->where('id', '[0-9]+')->name('fleets.destroy');