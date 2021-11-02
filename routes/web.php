<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeCtrl;
use App\Http\Controllers\OptionCtrl;
use App\Http\Controllers\VerifyCtrl;
use App\Http\Controllers\SyncCtrl;
use App\Http\Controllers\ListCtrl;
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
Route::match(array('GET','POST'),'/verify',[VerifyCtrl::class,'index']);


Route::get('/sync',[SyncCtrl::class, 'index']);
Route::get('/sync/{status}',[SyncCtrl::class, 'sync']);


Route::get('/list/{status}',[ListCtrl::class, 'index']);
