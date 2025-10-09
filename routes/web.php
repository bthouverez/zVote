<?php

use App\Models\User;
use App\Models\Votant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use \App\Http\Controllers\ScrutinController;
use \App\Http\Livewire\ScrutinComponent;
use \App\Http\Livewire\ConnectUser;

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


Route::get('login', function() {
    Auth::login(User::find(1));
    return redirect('user-select');
});
Route::post('userConnect/{id}', [ScrutinController::class, 'userConnect']);
Route::get('/logout', function() {
    Auth::logout();
    session()->forget('user_id');
    session()->forget('user_name');
    return redirect('/user-select');
});


Route::get('/scrutins', [ScrutinController::class, 'index'])->name('login');


Route::middleware(['cannot-reconnect'])->group(function () {
    Route::get('/user-select', ConnectUser::class);
});


Route::middleware(['auth'])->group(function () {
    Route::get('/scrutins/create', [ScrutinController::class, 'create']);
    Route::get('/scrutins/{scrutin}/resultats', [ScrutinController::class, 'resultats']);
    Route::get('/scrutins/{scrutin}/controle', [ScrutinController::class, 'controle']);
    Route::post('/scrutins', [ScrutinController::class, 'store']);
    Route::post('/addVotant', function() {
        $v = new Votant;
        $v->nom = request('newNom');
        $v->prenom = request('newPrenom');
        $v->save();
        session()->flash('info', $v->nom.' '.$v->prenom.' ajouté');
        return redirect('/scrutins');
    });
});


Route::middleware(['connected'])->group(function () {
    Route::get('/scrutins/{scrutin}', ScrutinComponent::class);
});
