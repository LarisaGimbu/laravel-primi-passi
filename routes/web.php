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

Route::get('/', function () {
    $data = [
        "name"=> "User",
    ];

    return view('home', $data);
})->name('home');

Route::get('/description', function () {
    $data = [

    ];

    return view('description', $data);
})->name('description');

Route::get('/position', function () {
    $data = [

    ];

    return view('position', $data);
})->name('position');
