<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuitarController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function(){return view('guitars.index');});
Route::get('/guitar',[GuitarController::class,'show']);
Route::get('about_us',function(){return view('guitars.about_us');});

Route::get('/create', [GuitarController::class, 'create'])->name('create');
Route::post('/store', [GuitarController::class, 'store'])->name('store');
Route::get('/edit/{id}', [GuitarController::class, 'edit'])->name('edit');
Route::post('/update/{id}', [GuitarController::class, 'update'])->name('update');
Route::delete('/delete/{id}', [GuitarController::class, 'destroy'])->name('destroy');
Auth::routes(); 

Route::get('/home', [App\Http\Controllers\HomeController::class,'index'])->name('home');


// Route::get('/guitars', 'GuitarController@index')->name('guitars.index');
// Route::get('/guitars/{guitar}', 'GuitarController@show')->name('guitars.show');


// Route::get('/create', 'GuitarController@create')->name('create');
// Route::post('/guitars', 'GuitarController@store')->name('store');

// Route::get('/guitars/{guitar}/edit', 'GuitarController@edit')->name('guitars.edit');
// Route::put('/guitars/{guitar}', 'GuitarController@update')->name('guitars.update');


// Route::delete('/guitars/{guitar}', 'GuitarController@destroy')->name('guitars.destroy');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
