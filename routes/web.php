<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('TestView');
});

Route::get('/teacher', function () {
    return view('Admin.Teacher');
});

Route::get('/secretary', function () {
    return view('Admin.Secretary');
});