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
    $addresse = [
        "city"=> "Milano",
        "country"=> "Italia",
        "street"=> "via Cesare",
        "number"=> "5",
        "branches"=> ['Bologna', 'Roma', 'Torino'],
    ];

    return view('position', $addresse);
})->name('position');

Route::get('/contatti', function () {
    $data = [
        "telephone"=> 2351489696,
        "fax"=> 2452745696,
        "email"=> 'ccj@gmial.com'
    ];

    return view('contatti', $data);
})->name('contatti');
