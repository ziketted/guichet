<?php

use Illuminate\Support\Facades\Route;

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


    Route::prefix('requerant')->group(function () {
        Route::get('/users', function () {
            // Matches The "/admin/users" URL
        });
    });

    Route::prefix('requerant')->group(function () {
        Route::get('/users', function () {
            // Matches The "/admin/users" URL
        });
    });


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
