<?php

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

if (! config('lasallesoftware-libraryfrontend.lasalle_suppress_index_route_in_laravelapp_package')) {

    Route::get('/', function () {
        return view('welcome');
    });
    
}
