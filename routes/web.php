<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact', [HomeController::class, 'contactStore'])->name('contact.store');
Route::get('detail/{car:slug}', [HomeController::class, 'detail'])->name('detail');

//Route Car
Route::group(['middleware' => 'is_admin', 'prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('/cars', CarController::class);
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::put('cars/update-image/{id}', [CarController::class, 'updateImage'])->name('cars.updateImage');
    Route::delete('/cars/{cars}', [CarController::class, 'destroy'])->name('cars.destroy');
});

//Route Pesanan
Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
Route::delete('messages/{message}', [MessageController::class, 'destroy'])->name('messages.destroy');

Auth::routes(['register' => false]);
