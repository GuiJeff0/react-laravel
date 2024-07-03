<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});


Route::apiResource('/student', StudentController::class);