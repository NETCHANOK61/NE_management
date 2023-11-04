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
});

Route::get('/request', function () {
    return view('request');
});

Route::get('/checkrequest', function () {
    return view('checkrequest');
});

Route::get('/createRepair', function () {
    return view('CRUD.create');
})->name('create');
