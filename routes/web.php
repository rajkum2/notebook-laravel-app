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
    return view('frontpage');
});

//Opening the index.blade.php page
Route::get('/notebooks', 'NotebooksController@index');
//Posting the data via form and accessing it in the Notebook Controller
Route::post('/notebooks', 'NotebooksController@store');
//View for creating a new book with a form page.
Route::get('/notebooks/create', 'NotebooksController@create');


