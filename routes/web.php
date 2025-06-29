<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard')->name('dashboard');
Route::view('/transactions', 'transactions')->name('transactions');
Route::view('/accounts', 'accounts')->name('accounts');
Route::view('/investments', 'investments')->name('investments');
Route::view('/credit-cards', 'credit-cards')->name('credit-cards');
Route::view('/loans', 'loans')->name('loans');
Route::view('/services', 'services')->name('services');
Route::view('/privileges', 'privileges')->name('privileges');
Route::view('/setting', 'setting')->name('setting');

