<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/main', function () {
    return view('main');
});
Route::get('/section1', function () {
    return view('section1');
});

Route::get('/section2', function () {
    return view('section2');
});

Route::get('/sectionx', function () {
    return view('section_combined');
});