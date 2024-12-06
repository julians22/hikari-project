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

Route::get('/', function () {
    return view('welcome');
})->name('web1');

Route::get('penta-sarana', function () {
    return view('penta-sarana');
})->name('web2');

Route::get('enertek', function () {
    return view('enertek');
})->name('web3');

