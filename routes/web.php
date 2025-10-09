<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
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


if(env('APP_ENV') === 'local' ) {
    Auth::login(User::find(1));
//    Auth::logout();
}


Route::post('userConnect/{id}', [ScrutinController::class, 'userConnect']);

Route::get('/logout', function() {
    Auth::logout();
    session()->forget('user_id');
    session()->forget('user_name');
    return redirect('/user-select');
});

Route::get('/', function() {
    if(session('user_id') != '') {
        return redirect('/scrutins');
    } else {
        return redirect('/user-select');
    }
});

if (!session('user_id')) {
    Route::get('/user-select', [ScrutinController::class, 'userSelect']);
}

if(session('user_id') == "") {
    dd(session('user_id'));
//    Route::get('/scrutins', func);
} else {
    Route::get('/scrutins', [ScrutinController::class, 'index']);

}


Route::post('/scrutins', [ScrutinController::class, 'store']);
Route::get('/scrutins/creation', [ScrutinController::class, 'create']);
Route::get('/scrutins/{scrutin}/resultats', [ScrutinController::class, 'resultats']);
Route::get('/scrutins/{scrutin}/controle', [ScrutinController::class, 'controle']);


Route::get('/test', function() {
   dd(session('user_id')) ;
});

Route::get('/scrutins/{scrutin}', ScrutinComponent::class);
//Route::get('/scrutins/{scrutin}', [ScrutinController::class, 'createVote']);

