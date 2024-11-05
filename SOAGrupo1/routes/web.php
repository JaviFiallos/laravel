<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudiantesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/estudiantes",[EstudiantesController::class, 'index']);