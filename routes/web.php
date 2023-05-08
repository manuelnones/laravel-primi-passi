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

Route::get('/', function() {

    $saluta = "Hello World";

    return view('home', compact('saluta'));
});

Route::get('/pagina1', function(){

    $titlePage = "Questa è la pagina 1";

    return view('/pagina1', compact('titlePage'));
});

Route::get('/pagina2', function(){

    $titlePage = "Questa è la pagina 2";

    return view('/pagina2', compact('titlePage'));
});

Route::get('/pagina3', function(){

    $titlePage = "Questa è la pagina 3";

    return view('/pagina3', compact('titlePage'));
});