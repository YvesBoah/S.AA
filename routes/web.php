<?php

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

//  Page d'Acceuil

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index')->name('home');




/*************************************************************************
                  Début de l'Utilisateur
*************************************************************************/

    // Profil de l'utilisateur 
      Route::resource('Profil','ProfileController');

    // Fiche client
      Route::resource('Client','ClientController');

    // Contrat Auto
      Route::resource('Contrat-Auto','Contrat_AutoController');

    // Objet Assuré 
      Route::resource('ObjetAssurer_Auto','ObjetAssurerController');

    // Garantie de l'objet Assuré 
      Route::resource('Garantie_Auto','garantie_AutoController');

    // Souscription du visiteur  
      Route::resource('Souscription_Auto','SouscriptionAutoController');

    // Garantie de l'objet Assuré 
      Route::resource('Souscription_MRH','SouscriptionMRHController');

    // Garantie de l'objet Assuré 
      Route::resource('Souscription_GAV','SouscriptionGAVController');


/*************************************************************************
                  Fin de l'Utilisateur
*************************************************************************/





/*************************************************************************
                  Début Route de l'Administrateur 
*************************************************************************/

Route::middleware('admin')->group(function () {


	// Page d'acceuil de l'administrateur
    Route::resource ('Acceuil-Admin', 'AdminController');
    
  // Section dédié à la création d'une agence
    Route::resource ('Agence-Admin', 'AgenceController');




});

/*************************************************************************
                  Fin Route de l'Administrateur 
*************************************************************************/





/*************************************************************************
                      Authentification Laravel
*************************************************************************/

							Auth::routes();

/*************************************************************************
                      Authentification Laravel
*************************************************************************/