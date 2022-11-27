<?php

use App\Http\Controllers\EnrolementController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {



    Route::name('enrolement.')->group(function () {
        Route::get('/enrolement/index', [EnrolementController::class, 'index'])->name('index');
        Route::post('/enrolement/create', [EnrolementController::class, 'create'])->name('create');
        Route::post('/enrolement/show/', [EnrolementController::class, 'create'])->name('create');
        });


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
