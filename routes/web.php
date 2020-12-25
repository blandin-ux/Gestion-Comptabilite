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
Route::get('/rubriques','RubriqueController@index')->middleware('auth');
Route::get('/rubriques/create','RubriqueController@create')->middleware('auth');
Route::post('/rubriques','RubriqueController@store')->middleware('auth');
Route::get('/rubriques/{rubrique}/destroy','RubriqueController@destroy')->middleware('auth');
Route::get('/rubriques/{rubrique}/edit','RubriqueController@edit')->middleware('auth');
Route::post('/rubriques/update','RubriqueController@update')->middleware('auth');
// End rubriques


// Route des suivis
Route::get('/suivis','SuiviController@index')->middleware('auth');
Route::get('/suivis/create','SuiviController@create')->middleware('auth');
Route::post('/suivis','SuiviController@store')->middleware('auth');
Route::get('/suivis/edit/{suivi}','SuiviController@edit')->middleware('auth');
Route::post('/suivis/update','SuiviController@update')->middleware('auth');
Route::get('/suivis/rapport','SuiviController@rapport')->middleware('auth');
Route::get('/suivis/compte','SuiviController@compte')->middleware('auth');
Route::get('/suivis/calcule','SuiviController@calcule')->middleware('auth');
// End suivis

// Route des Journaux
Route::get('/journal/mois','SuiviController@journalmois')->middleware('auth');
Route::get('/journal/mois/janvier','SuiviController@janvier')->middleware('auth');
Route::get('/journal/mois/fevrier','SuiviController@fevrier')->middleware('auth');
Route::get('/journal/mois/mars','SuiviController@mars')->middleware('auth');
Route::get('/journal/mois/avril','SuiviController@avril')->middleware('auth');
Route::get('/journal/mois/mai','SuiviController@mai')->middleware('auth');
Route::get('/journal/mois/juin','SuiviController@juin')->middleware('auth');
Route::get('/journal/mois/juillet','SuiviController@juillet')->middleware('auth');
Route::get('/journal/mois/aout','SuiviController@aout')->middleware('auth');
Route::get('/journal/mois/septembre','SuiviController@septembre')->middleware('auth');
Route::get('/journal/mois/octobre','SuiviController@octobre')->middleware('auth');
Route::get('/journal/mois/novembre','SuiviController@novembre')->middleware('auth');
Route::get('/journal/mois/decembre','SuiviController@decembre')->middleware('auth');
Route::get('/journal/trimestre','SuiviController@trimestre')->middleware('auth');
Route::get('/journal/semestre','SuiviController@semestre')->middleware('auth');
Route::get('/journal/ans','SuiviController@ans')->middleware('auth');
Route::get('/journal/decennie','SuiviController@decennie')->middleware('auth');
// Fin Journeaux
