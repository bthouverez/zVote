<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\ScrutinController;
use \App\Http\Livewire\ScrutinComponent;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [ScrutinController::class, 'index']);
Route::get('/scrutins/{scrutin}', ScrutinComponent::class);
Route::get('/scrutins/{scrutin}/resultats', [ScrutinController::class, 'resultats']);
Route::get('/scrutins/{scrutin}/controle', [ScrutinController::class, 'controle']);
