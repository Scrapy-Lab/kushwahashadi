<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('login');


Route::get('/registration-step', function () {
    return view('innerPages.registration-step');
})->name('registration_step');

Route::group(['middleware' => ['auth']], function () {


    Route::get('/dashboard', function () {
        return view('innerPages.dashboard');
    })->name('dashboard');

    Route::get('/edit-profile', function () {
        return view('innerPages.edit_profile');
    })->name('edit_profile');

    // Route::get('/view-profile/{id}', function () {
    //     return view('innerPages.view_profile');
    // })->name('view_profile');
});
Route::get('/view-profile/{id}', function ($id) {
    // dd($id);
    return view('innerPages.view_profile', ['id' => $id]);
})->name('view_profile');


Route::get('crop-image-upload', [CropImageController::class, 'index']);
Route::post('crop-image-upload', [CropImageController::class, 'store'])->name('crop.image.upload.store');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');
