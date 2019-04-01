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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// Lister les séries
Route::get('/list', 'SeriesController@index')->name('listSeries');


// Supprimer une série
Route::get('/delete/{id}', function ($id){

})->name('deleteSerie');



// Editer une série
Route::get('/edit/{id}', function ($id){

})->name('editSerie');


// Ajouter une série
Route::get('/add/serie/{id}', function($id){

})->name('addSerie');
