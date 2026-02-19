<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Routes pour les brouillons/test à supprimer plus tard
Route::get('/r', function () {
    return view('partials.liste_affectation');
});

Route::get('/welcome', function () {
    return view('welcome');
});

// Route vers base layout
Route::get('/base', function () {
    return view('layouts.base');
});

// Routes vers les pages d'authentification
Route::get('/', function () {
    return view('authentification.connexion');
})->name('login');

Route::get('/authentification/inscription', function () {
    return view('authentification.inscription');
});

// Correction du nom de la vue (coquille corrigée)
Route::get('/authentification/reinitialisation_mdp', function () {
    return view('authentification.reinitialisation_mdp');
});

// Route vers le tableau de bord
Route::get('/dashboard', function () {
    return view('tableau_de_bord.index');
})->name('dashboard');

// Routes pour les demandes
Route::get('/liste_demandes', function () {
    return view('demandes.liste_demandes');
})->name('demandes.index');

Route::get('/detail_demande', function () {
    return view('demandes.detail_demande');
})->name('demandes.detail');

Route::get('/detail_demande_copy', function () {
    return view('demandes.detail_demande_copy');
})->name('demandes.detail_copy');

// Routes pour les affectations
Route::get('/affectation/metre', function () {
    return view('affectations.metre');
})->name('affectation.metre');

// CORRECTION ICI : Remplacé l'espace par un underscore
Route::get('/affectation/mise_en_service', function () {
    return view('affectations.mise_en_service');
})->name('affectation.mise_en_service');

// Routes pour les saisies de compte rendu
Route::get('/compte_rendu/metre', function () {
    return view('saisis_cri_et_devis.metre');
})->name('compte_rendu.metre');

// CORRECTION ICI : URL et Nom corrigés (plus d'espaces)
Route::get('/saisis_cri_et_devis/formulaire_de_metre', function () {
    return view('saisis_cri_et_devis.form_metre');
})->name('saisis_cri_et_devis.formulaire_de_metre');

// Route pour les saisies de mise en service
Route::get('/compte_rendu/mise_en_service', function () {
    return view('saisis_cri_et_devis.mise_en_service');
})->name('compte_rendu.mise_en_service');

// Route pour le formulaire de saisie de compte rendu de mise en service
Route::get('/compte_rendu/form_mise_en_service', function () {
    return view('saisis_cri_et_devis.form_mise_en_service');
})->name('compte_rendu.form_mise_en_service');

// Routes pour les validations de compte rendu
Route::get('/validations/metre', function () {
    return view('validations.metre');
})->name('validations.metre');

// CORRECTION ICI : Remplacé l'espace par un underscore
Route::get('/validations/mise_en_service', function () {
    return view('validations.mise_en_service');
})->name('validations.mise_en_service');



// Routes pour les référentiels
Route::get('/donnees_de_reference/liste_agences', function () {
    return view('donnees_de_reference.liste_agences');
})->name('donnees_de_reference.liste_agences');

Route::get('/donnees_de_reference/modeles_devis', function () {
    return view('donnees_de_reference.modeles_devis');
})->name('donnees_de_reference.modeles_devis');

Route::get('/donnees_de_reference/diametres_branchement', function () {
    return view('donnees_de_reference.diametres_branchement');
})->name('donnees_de_reference.diametres_branchement');


Route::get('/donnees_de_reference/diametres_compteur', function () {
    return view('donnees_de_reference.diametres_compteur');
})->name('donnees_de_reference.diametres_compteur');

Route::get('/donnees_de_reference/nature_conduite', function () {
    return view('donnees_de_reference.nature_conduite');
})->name('donnees_de_reference.nature_conduite');

Route::get('/donnees_de_reference/types_contrat_autorises', function () {
    return view('donnees_de_reference.types_contrat_autorises');
})->name('donnees_de_reference.types_contrat_autorises');

Route::get('/donnees_de_reference/liste_bordereaux_de_prix', function () {
    return view('donnees_de_reference.liste_bordereaux_de_prix');
})->name('donnees_de_reference.liste_bordereaux_de_prix');



// Routes pour l'administration
Route::get('/administration/roles_et_habilitations', function () {
    return view('administration.roles');
})->name('administration.roles_et_habilitations');
