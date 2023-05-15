<?php

use Illuminate\Support\Facades\Route;

 

Route::get('/', function () {
    return view('welcome') ;
});

Route::get('/demo', function () {
    //return view('welcome');
    echo "<h1>hello world</h1>";
});

