<?php

use App\Http\Controllers\Dashboard\AcaraController;
use App\Http\Controllers\UsersController;
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


// ADMIN DASHBOARD
Route::prefix('admin')->group(function(){

    // Auth
    Route::get('/login', function(){
        return view('admin.login');
    })->middleware('guest');

    // Master Data
    Route::resource('acara', AcaraController::class)->middleware('auth');

});
