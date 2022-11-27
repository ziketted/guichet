<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\EnrolementController;
use App\Http\Controllers\ExonerationController;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ImportationController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\RoleController;

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
        Route::get('/enrolement/store', [EnrolementController::class, 'store'])->name('store');
        Route::post('/enrolement/create', [EnrolementController::class, 'create'])->name('create');
        Route::get('/enrolement/show/{enrolement}', [EnrolementController::class, 'show'])->name('show');
        Route::delete('/enrolement/{operateur}',[EnrolementController::class, 'destroy'])->name('destroy');
        });

    Route::name('exoneration.')->group(function () {
        Route::get('/exoneration/index', [ExonerationController::class, 'index'])->name('index');
        Route::post('/exoneration/store', [ExonerationController::class, 'store'])->name('store');
        Route::post('/exoneration/create', [ExonerationController::class, 'create'])->name('create');
        Route::get('/exoneration/show/{exoneration}', [ExonerationController::class, 'show'])->name('show');
        Route::delete('/exoneration/{exoneration}',[ExonerationController::class, 'destroy'])->name('destroy');

        });

    Route::name('document.')->group(function () {
        Route::get('/document/index', [DocumentController::class, 'index'])->name('index');
        Route::post('/document/store', [DocumentController::class, 'store'])->name('store');
        Route::post('/document/create', [DocumentController::class, 'create'])->name('create');
        Route::post('/document/show/{document}', [DocumentController::class, 'show'])->name('show');
        Route::delete('/document/{docuemnt}',[DocumentController::class, 'destroy'])->name('destroy');

        });

    Route::name('importation.')->group(function () {
        Route::get('/importation/index', [ImportationController::class, 'index'])->name('index');
        Route::post('/importation/store', [ImportationController::class, 'store'])->name('store');
        Route::post('/importation/create', [ImportationController::class, 'create'])->name('create');
        Route::post('/importation/show/{importation}', [ImportationController::class, 'show'])->name('show');
        Route::delete('/importation/{importation}',[ImportationController::class, 'destroy'])->name('destroy');
        });

    Route::name('notification.')->group(function () {
        Route::get('/notification/index', [NotificationController::class, 'index'])->name('index');
        Route::post('/notification/store', [NotificationController::class, 'store'])->name('store');
        Route::post('/notification/create', [NotificationController::class, 'create'])->name('create');
        Route::delete('/notification/{notifi}',[DocumentController::class, 'destroy'])->name('destroy');
        Route::post('/notification/show/{notification}', [NotificationController::class, 'show'])->name('show');
        });

    Route::name('role.')->group(function () {
        Route::get('/role/index', [RoleController::class, 'index'])->name('index');
        Route::post('/role/store', [RoleController::class, 'store'])->name('store');
        Route::post('/role/create', [RoleController::class, 'create'])->name('create');
        Route::delete('/role/{role}',[RoleController::class, 'destroy'])->name('destroy');
        Route::post('/role/show/{role}', [RoleController::class, 'show'])->name('show');
        });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
