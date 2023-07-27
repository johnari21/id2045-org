<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\​BeneficiaryController;
use App\Http\Controllers\VolunteerController;

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

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [AuthController::class, 'index']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/beneficiary', [​BeneficiaryController::class, 'index']);
Route::get('/beneficiary/detail', [​BeneficiaryController::class, 'detail']);
Route::get('/beneficiary/bansos', [​BeneficiaryController::class, 'bansos']);
Route::get('/volunteer', [VolunteerController::class, 'index']);
