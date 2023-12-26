<?php
use App\Http\Controllers\HomeController;

use App\Http\Controllers\UsersController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\StudentController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

use function Ramsey\Uuid\v1;



Route::get('/', [HomeController::class, 'home'])->name('home');


Route::get('/users', [UsersController::class, 'index'])->name('users');
Route::get('/users/create', [UsersController::class, 'create']);
Route::post('/users/create', [UsersController::class, 'store']);
Route::get('/users/{user}', [UsersController::class, 'edit']);
Route::post('/users/{user}', [UsersController::class, 'update']);

Route::delete('/users/delete/{user}', [UsersController::class, 'delete']);


Route::get('/jobs', [JobController::class, 'index'])->name('jobs');
Route::get('/job/create', [JobController::class, 'create']);
Route::post('/job/create', [JobController::class, 'store']);
Route::get('/job/{id}', [JobController::class, 'edit']);
Route::post('/job/{id}', [JobController::class, 'update']);
// Route::put('/job/{id}', [JobController::class, 'update']);
Route::delete('/job/{id}', [JobController::class,'destroy'])->name('jobs.destroy');



// Route::post('/jobs', [JobController::class, 'update']);
Route::delete('/jobs/{id}', [JobController::class, 'delete']);
// Route::put('/job/{id}', 'JobController@update');



// routes/web.php or routes/web.php

// routes/web.php or routes/web.php

Route::post('/job/{id}', [JobController::class, 'update']);

Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/student/create', [StudentController::class, 'create']);
Route::post('/student/create', [StudentController::class, 'store']);
Route::get('/students/{id}', [StudentController::class, 'edit']);
Route::post('/students/{id}', [StudentController::class, 'update']);

Route::post('/students', [StudentController::class, 'update']);

Route::delete('/students/{id}', [StudentController::class,'destroy'])->name('students.destroy');











Route::get('/students', [StudentController::class, 'index'])->name('students');


