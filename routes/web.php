<?php

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

if (! config('lasallesoftware-libraryfrontend.lasalle_suppress_index_route_in_laravelapp_package')) {

    Route::get('/', function () {
        return view('welcome');
    });
    
}
