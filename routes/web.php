<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FieldController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->auth;

Route::get('profile', [ProfileController::class, 'edit'])
			->name('profile.edit');

Route::put('profile', [ProfileController::class, 'update'])
			->name('profile.update');

Route::view('cancha-uno', 'canchas.uno')
					->name('cancha-uno')
					->middleware('auth');
Route::view('cancha-dos', 'canchas.two')
					->name('cancha-dos')
					->middleware('auth');
Route::view('cancha-tres', 'canchas.three')
					->name('cancha-tres')
					->middleware('auth');
Route::view('menu-reserva', 'menu.index')
					->name('menu-reserva')
					->middleware('auth');

Route::resource('onefields', FieldController::class)
					->except(['create', 'edit']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('/login/{onefield}', [App\Http\Controllers\FieldController::class, 'destroy'])->name('fields_delete');
