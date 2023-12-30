<?php

use App\Http\Controllers\Studentcontroller;
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

Route::get('/', [Studentcontroller::class, 'index']);
Route::get('/register', [Studentcontroller::class, 'register']);
Route::post('/register', [Studentcontroller::class, 'create']);
