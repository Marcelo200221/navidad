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

Route::get('/', function(){
    return view('home');
});

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/seleccion', function(){
    return view('seleccion');
})->name('seleccion');

Route::get('/vale', function(){
    return view('vale');
})->name('vale');

Route::get('/mami', function(){
    return view('mami');
})->name('mami');

Route::get('/tio', function(){
    return view('tio');
})->name('tio');

Route::get('/felipe', function(){
    return view('felipe');
})->name('felipe');

Route::get('/despedida', function(){
    return view('despedida');
})->name('despedida');
