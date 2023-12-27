<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', [SessionController::class, 'dashboard']);

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/doctor', [DoctorController::class, 'index']);
Route::get('/patient', [PatientController::class, 'index']);
Route::get('/assessment', [AssessmentController::class, 'index']);
Route::get('/question', [QuestionController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/edit', [ProfileController::class, 'edit']);