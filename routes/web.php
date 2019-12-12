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
//Login General
Auth::routes();

//Login Single Sign-On
Route::get('login/local', 'Auth\LoginController@local')->name('login-local');
Route::get('auth', 'Auth\LoginController@redirectToProvider');
Route::get('auth/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	//Usuarios
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
	//Materias de primer semestre
	Route::resource('admin/programa', 'PrimerSemestre\ProgramaController');
	Route::resource('admin/materia', 'PrimerSemestre\MateriaController');
	Route::resource('admin/grupo', 'PrimerSemestre\GrupoController');
	Route::resource('admin/grupo-materia', 'PrimerSemestre\GrupoMateriaController');
  //Json Response
	Route::get('admin/buscar/materias/{palabra}', 'PrimerSemestre\MateriaController@buscar');
  Route::post('admin/buscar/materias', 'PrimerSemestre\MateriaController@buscarEditar');
	//orden de materias
	Route::get('admin/orden/up/{id}', 'PrimerSemestre\GrupoMateriaController@up');
	Route::get('admin/orden/down/{id}', 'PrimerSemestre\GrupoMateriaController@down');
	//Documentación
	Route::get('admin/document/{url}', 'DocumentController@index');
	//Descarga Excel
	Route::get('admin/export/programas', 'PrimerSemestre\GrupoMateriaController@export');

});

//Vistas de programas y materias
Route::get('/', ['uses' => 'SitioWeb\SitioWebController@index'])->name('sitio');
Route::get('materias-estudiantes-de-primer-semestre', ['uses' => 'PrimerSemestre\PrimerSemestreController@index'])->name('programa');
Route::get('programa/{nombre}', ['uses' => 'PrimerSemestre\PrimerSemestreController@show']);
