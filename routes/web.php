<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LbPagesController;

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

Route::get('/', [LbPagesController::class, 'index']);
Route::get('/about', [LbPagesController::class, 'about']);
Route::get('/services', [LbPagesController::class, 'services']);
Route::get('/projects', [LbPagesController::class, 'projects']);
Route::get('/contact', [LbPagesController::class, 'contact']);
Route::get('/privacypolicy', [LbPagesController::class, 'privacypolicy']);
Route::get('/termsconditions', [LbPagesController::class, 'termsconditions']);

