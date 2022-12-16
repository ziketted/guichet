<?php

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdmingeneController;
use App\Http\Controllers\EnrolementController;
use App\Http\Controllers\ExonerationController;
use App\Http\Controllers\ImportationController;
use App\Http\Controllers\NotificationController;
use App\Models\Notification;
use Symfony\Component\HttpKernel\EventListener\ProfilerListener;

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
        Route::get('/enrolement/pay', [EnrolementController::class, 'pay'])->name('pay');
        Route::get('/enrolement/store', [EnrolementController::class, 'store'])->name('store');
        Route::post('/enrolement/create', [EnrolementController::class, 'create'])->name('create');
        Route::get('/enrolement/show/{enrolement}', [EnrolementController::class, 'show'])->name('show');
        Route::delete('/enrolement/{operateur}',[EnrolementController::class, 'destroy'])->name('destroy');
        });

    Route::name('exoneration.')->group(function () {
        Route::get('/exoneration/index', [ExonerationController::class, 'index'])->name('index');
        Route::get('/exoneration/store', [ExonerationController::class, 'store'])->name('store');
        Route::get('/exoneration/{exoneration}/edit/', [ExonerationController::class, 'edit'])->name('edit');
        Route::post('/exoneration/create', [ExonerationController::class, 'create'])->name('create');
        Route::get('/exoneration/{exoneration}/show', [ExonerationController::class, 'show'])->name('show');
        Route::delete('/exoneration/{exoneration}',[ExonerationController::class, 'destroy'])->name('destroy');

        //Mise à jour des exonérations

        Route::post('/exoneration/titre', [ExonerationController::class, 'titre'])->name('upd_titre');
        Route::post('/exoneration/lettre', [ExonerationController::class, 'upd_lettre'])->name('upd_lettre');
        Route::post('/exoneration/attestation', [ExonerationController::class, 'upd_attestation'])->name('upd_attestation');
        Route::post('/exoneration/copie_avis', [ExonerationController::class, 'upd_copie_avis'])->name('upd_copie_avis');
        Route::post('/exoneration/liste_colisage', [ExonerationController::class, 'upd_liste_colisage'])->name('upd_liste_colisage');
        Route::post('/exoneration/projet', [ExonerationController::class, 'upd_projet'])->name('upd_projet');
        Route::post('/exoneration/transport', [ExonerationController::class, 'upd_transport'])->name('upd_transport');
        Route::post('/exoneration/facture', [ExonerationController::class, 'upd_facture'])->name('upd_facture');
        Route::post('/exoneration/affectation', [ExonerationController::class, 'upd_affectation'])->name('upd_affectation');
        Route::post('/exoneration/commentaire', [ExonerationController::class, 'upd_commentaire'])->name('upd_commentaire');
        Route::post('/exoneration/type', [ExonerationController::class, 'upd_type'])->name('upd_type');

        });

    Route::name('profile.')->group(function () {
        Route::get('/profile/index', [ProfileController::class, 'index'])->name('index');
        Route::get('/profile/document', [ProfileController::class, 'document'])->name('document');
        Route::get('/profile/autres_infos', [ProfileController::class, 'autre_infos'])->name('autre_infos');
        Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('edit');
        Route::get('/profile/store', [ProfileController::class, 'store'])->name('store');
        Route::post('/profile/create', [ProfileController::class, 'create'])->name('create');
        Route::post('/profile/identiteupdate', [ProfileController::class, 'identiteupdate'])->name('identiteupdate');
        Route::post('/profile/{profile}/show', [ProfileController::class, 'show'])->name('show');
        Route::delete('/profile/{profile}',[ProfileController::class, 'destroy'])->name('destroy');

        Route::post('/profile/upd_autres_infos', [ProfileController::class, 'upd_autre_infos'])->name('upd_autres_infos');
        Route::post('/profile/udpstatut', [ProfileController::class, 'upd_statut'])->name('updStatut');
        Route::post('/profile/udpautorisation', [ProfileController::class, 'upd_autorisation'])->name('updAutorisation');
        Route::post('/profile/upd_personnalite', [ProfileController::class, 'upd_personnalite'])->name('upd_personnalite');
        Route::post('/profile/upd_convention', [ProfileController::class, 'upd_convention'])->name('upd_convention');
        Route::post('/profile/upd_certificat', [ProfileController::class, 'upd_certificat'])->name('upd_certificat');
        Route::post('/profile/upd_accord', [ProfileController::class, 'upd_accord'])->name('upd_accord');

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
        Route::delete('/notification/{notification}',[NotificationController::class, 'destroy'])->name('destroy');
        Route::post('/notification/show/{notification}', [NotificationController::class, 'show'])->name('show');
        });

    Route::name('role.')->group(function () {
        Route::get('/role/index', [RoleController::class, 'index'])->name('index');
        Route::post('/role/store', [RoleController::class, 'store'])->name('store');
        Route::post('/role/create', [RoleController::class, 'create'])->name('create');
        Route::delete('/role/{role}',[RoleController::class, 'destroy'])->name('destroy');
        Route::post('/role/show/{role}', [RoleController::class, 'show'])->name('show');
        });

        //Admin profile
        Route::name('admin.')->group(function () {

            Route::get('/admin/index', [AdmingeneController::class, 'adminindex'])->name('admin');
            Route::get('/profile', [AdmingeneController::class, 'profile'])->name('profile');
            Route::get('/valid_enrolement', [AdmingeneController::class, 'enrolement'])->name('enrolement');
            Route::get('/validation_exoneration', [AdmingeneController::class, 'exoneration'])->name('exoneration');
            });


        //Aide lien
        Route::get('/aide', function () {
            return view('aide');
        });
        Route::get('/dashboard', [AdmingeneController::class, 'index'])->name('dashbaord');



});
