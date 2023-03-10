<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\RetrieveController;
use App\Http\controllers\FetchingData;
use App\Http\controllers\HttpController;
use App\Http\controllers\MailController;



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

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/login',[CustomAuthController::class,'login']);//one is the className and one is the function name
Route::get('/users',[CustomAuthController::class,'register']);
Route::get('/manu',[RetrieveController::class,'class']);
Route::get("/fetch",[FetchingData::class,'retrieve']);
Route::get("/Data",[HttpController::class,'index']);
Route::get("/mail",[MailController::class,'TestMail']);
Route::get("/table",[CustomAuthController::class,'getdata']);

