<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('login');

Route::group(['middleware' => ['auth']], function () {


Route::get('/dashboard',function(){
    return view('innerPages.dashboard');
})->name('dashboard');


});

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
