<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DemandeController;
use App\Http\Controllers\ProductController;

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



Route::get('/', function () {
  return view('home');
});

Route::post('emprestimo/emprestimo-pessoal/debut',[UserController::class,'demande']);
Route::get('emprestimo/emprestimo-pessoal/resumo',[UserController::class,'felicitation']);


//TEST SUR QRCODE
Route::get('product',[ProductController::class,'creact']);
Route::post('add',[ProductController::class,'add']);
Route::get('all',[ProductController::class,'index']);






