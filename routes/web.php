<?php

use App\Http\Controllers\DashboardController;
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
    return view('welcome');
});
Route::group(['prefix'=>'dashboard','as'=>'dashboard.'], function () {
    Route::get('/home', [DashboardController::class,'index'])->name('index');

    Route::group(['prefix'=>'/user','as'=>'user.'], function () {
        //routes
    });
    Route::group(['prefix'=>'/admin','as'=>'admin.'], function () {
        //admin routes
    });
});
