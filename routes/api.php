<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\StudentController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/{user}', [UsersController::class, 'view']);
Route::post('/users',[UsersController::class, 'store']);
Route::patch('/users/{user}', [UsersController::class, 'update']);
Route::put('/users/{user}', [UsersController::class, 'update']);
Route::delete('/users/{user}', [UsersController::class, 'destroy']);


Route::get('/jobs', [JobController::class, 'index']);
Route::get('/jobs/{jobs}', [JobController::class, 'view']);
Route::post('/jobs',[JobController::class, 'store']);
Route::patch('/jobs/{job}', [JobController::class, 'update']);
Route::put('/jobs/{job}', [JobController::class, 'update']);
Route::delete('/jobs/{job}', [JobController::class, 'destroy']);


Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{student}', [StudentController::class, 'view']);
Route::post('/students',[StudentController::class, 'store']);
Route::patch('/students/{student}', [StudentController::class, 'update']);
Route::put('/students/{student}', [StudentController::class, 'update']);
Route::delete('/students/{student}', [StudentController::class, 'destroy']);
