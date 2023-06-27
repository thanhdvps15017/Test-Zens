<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\Controller;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Controller::class, 'index']);
Route::post('/', [Controller::class, 'index_'])->name('index_');

// Route::get('/test-zens', [Controller::class, 'index']);
// Route::post('/test-zens', [Controller::class, 'index_'])->name('index_');
