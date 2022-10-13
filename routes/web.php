<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PagesController::class, 'index']);
Route::get('/list-opd', [PagesController::class, 'listOpd']);
Route::get('/list-opd/pupr', [PagesController::class, 'listOpd']);
Route::get('/list-opd/{id}/survey', [PagesController::class, 'survey']);
Route::post('/list-opd/{id}/survey/store', [PagesController::class, 'surveyStore']);

//ADMIN
Route::post('/admn/auth', [AuthController::class, 'auth']);
Route::get('/admn/lgn-page', [AuthController::class, 'loginPage']);
Route::prefix('admn')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard']);
    Route::get('/data-kuisioner', [AdminController::class, 'dataKuisioner']);
    Route::get('/data-kuisioner/print/{id}', [AdminController::class, 'printKuisioner']);
    Route::get('/qrcode/print/{id}', [AdminController::class, 'printQR']);
    Route::post('/dashboard/profile-edit', [AdminController::class, 'profileEdit']);
});
