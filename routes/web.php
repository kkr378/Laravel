<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ForFormController;
use App\Http\Controllers\InputInfo;
use App\Http\Controllers\OkInfoController;
use App\Models\ForForm;
use Illuminate\Support\Facades\Route;


Route::get('/', [LoginController::class, 'home']);


Route::get('form/show', [ForFormController::class, 'show']);
Route::get('form/registerview', [ForFormController::class, 'create']);
Route::get('/form/contactinfo', [ContactController::class, 'create']);

Route::get('/form/input', [OkInfoController::class, 'show']);
Route::get('/form/inputinfo', [OkInfoController::class, 'create']);





Route::resource('/form',ForFormController::class);
Route::resource('/input',OkInfoController::class);

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submitForm');







