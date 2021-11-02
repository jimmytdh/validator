<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCtrl;
use App\Http\Controllers\OptionCtrl;
use App\Http\Controllers\VerifyCtrl;
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

Route::get('/', [HomeCtrl::class, 'index']);

Route::get('/category', [OptionCtrl::class, 'category']);
Route::post('/verify',[VerifyCtrl::class, 'verifyData'])->name('verify');
