<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PetsController;
use App\Http\Controllers\MushroomController;
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
    return view('welcome');
});

//mushroom

Route::get('/mushroom/show',[MushroomController::class,'show']);
Route::get('/mushroom',[MushroomController::class,'index'])->name('mushroom');
Route::get('/mushroom/create',[MushroomController::class,'create'])->name('mushroom.create');
Route::post('/mushroom/create',[MushroomController::class,'store'])->name('mushroom.store');





















//Route::post('/pets',[PetsController::class,'show']);
//Auth::routes();
//('bookings.create')
//Route::get('/james','BookingController@index')->name('home');
//Route::get('/home', [BookingController::class, 'index'])->name('home');
//Route::resource('bookings',BookingController::class);
//Route::get('/pets',[PetsController::class,'show']);
Route::get('/pets',[PetsController::class,'index'])->name('pets');

Route::get('/pets/create',[PetsController::class,'create'])->name('pets.create');

Route::post('/pets/create',[PetsController::class,'store'])->name('pets.store');

Route::post('/pets/',[PetsController::class,'destroy'])->name('pets.destroy');

Route::get('/pets/show',[PetsController::class,'show']);
