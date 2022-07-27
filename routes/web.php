<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
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

Route::get('/datatable', function () {
    return view('welcome2');
});
Route::get('/', function () {
    return view('welcome2');
});
Route::get('/test', function () {
        return view('example');
});

//Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');

//Auth::routes();
//
//Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth:web']], function () {
    Route::resource('post', PostController::class);
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
