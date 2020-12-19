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
route::get('/deconnexion','Auth\CustomLogController@deconnecter')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// Route des rubriques
Route::get('/rubriques','RubriqueController@index');
Route::get('/rubriques/create','RubriqueController@create');
Route::post('/rubriques','RubriqueController@store');
Route::get('/rubriques/{rubrique}/destroy','RubriqueController@destroy');
Route::get('/rubriques/{rubrique}/edit','RubriqueController@edit');
Route::post('/rubriques/update','RubriqueController@update');
// End rubriques


// Route des suivis
Route::get('/suivis','SuiviController@index');
Route::get('/suivis/create','SuiviController@create');
Route::post('/suivis','SuiviController@store');
Route::get('/suivis/edit/{suivi}','SuiviController@edit');
Route::post('/suivis/update','SuiviController@update');
Route::get('/suivis/rapport','SuiviController@rapport');
Route::get('/suivis/compte','SuiviController@compte');
Route::get('/suivis/calcule','SuiviController@calcule');
// End suivis

// Route des Journaux
Route::get('/journal/mois','SuiviController@journalmois');
Route::get('/journal/mois/janvier','SuiviController@janvier');
Route::get('/journal/mois/fevrier','SuiviController@fevrier');
Route::get('/journal/mois/mars','SuiviController@mars');
Route::get('/journal/mois/avril','SuiviController@avril');
Route::get('/journal/mois/mai','SuiviController@mai');
Route::get('/journal/mois/juin','SuiviController@juin');
Route::get('/journal/mois/juillet','SuiviController@juillet');
Route::get('/journal/mois/aout','SuiviController@aout');
Route::get('/journal/mois/septembre','SuiviController@septembre');
Route::get('/journal/mois/octobre','SuiviController@octobre');
Route::get('/journal/mois/novembre','SuiviController@novembre');
Route::get('/journal/mois/decembre','SuiviController@decembre');
// Fin Journeaux

//calebcaleb2020