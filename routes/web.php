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
route::get('drivers/senior', [DriversController::class, 'senior'])->name('drivers.senior');
Route::post('drivers/countryofbirth', [DriversController::class, 'countryofbirth'])->name('drvers.countryofbirth');
Route::get('drivers/{id}', [DriversController::class, 'show'])->where('id', '[0-9]+')->name('drivers.show');
Route::get('drivers/create',[DriversController::class,'create'])->name('drivers.create');
Route::get('drivers/{id}/edit', [DriversController::class, 'edit'])->where('id', '[0-9]+')->name('drivers.edit');
Route::post('drivers/store',[DriversController::class,'store'])->name('id','[0-9]+')->name('drivers.store');
Route::delete('drivers/delete/{id}', [DriversController::class, 'destroy'])->where('id', '[0-9]+')->name('drivers.destroy');
Route::patch('drivers/{id}/update', [DriversController::class, 'update'])->where('id', '[0-9]+')->name('fleets.update');

Route::get('fleets', [FleetsController::class, 'index'])->name('fleets.index');
Route::get('fleets/{id}', [FleetsController::class, 'show'])->where('id', '[0-9]+')->name('fleets.show');
Route::get('fleets/create',[FleetsController::class,'create'])->name('fleets.create');
Route::get('fleets/{id}/edit', [FleetsController::class, 'edit'])->where('id', '[0-9]+')->name('fleets.edit');
Route::post('fleets/store',[FleetsController::class,'store'])->name('id','[0-9]+')->name('fleets.store');
Route::delete('fleets/delete/{id}', [FleetsController::class, 'destroy'])->where('id', '[0-9]+')->name('fleets.destroy');
Route::patch('fleets/{id}/update', [FleetsController::class, 'update'])->where('id', '[0-9]+')->name('fleets.update');