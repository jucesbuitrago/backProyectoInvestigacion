<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::apiResource('api/student', StudentController::class);


    Route::get('api/student', [StudentController::class, 'index']);
    Route::post('api/student', [StudentController::class, 'store']);
    Route::get('api/student/{id}', [StudentController::class, 'show']);
    Route::put('api/student/{id}', [StudentController::class, 'update']);
    Route::delete('api/student/{id}', [StudentController::class, 'destroy']);