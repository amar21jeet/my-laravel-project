<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () {
    return view('user-form');  // load user-form
});
Route::post('/submit', [RegistrationController::class, 'store'])->name('form.submit');