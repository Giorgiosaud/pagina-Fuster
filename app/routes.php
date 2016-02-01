<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
 */

Route::get('/', function () {
		$principles = Principle::orderBy('order')->get();
		$variables = Variable::all();
		$projects = Project::orderBy('order')->get();
		$services = Service::orderBy('order')->get();
		return View::make('welcome')->with(compact('principles'))->with(compact('variables'))->with(compact('projects'))->with(compact('services'));
	});
Route::get('login', array('uses'  => 'HomeController@showLogin'));
Route::post('login', array('uses' => 'HomeController@doLogin'));
Route::get('logout', array('uses' => 'HomeController@doLogout'));

Route::post('sendMail', 'HomeController@sendMail');
Route::get('formulario', function () {
		return View::make('formulario');
	});
Route::resource('password', 'RemindersController', array(
	'only' => array('index', 'store', 'show', 'update')
));
Route::group(array('before' => 'auth', ), function () {
		Route::resource('principles', 'PrinciplesController');
		Route::resource('services', 'ServicesController');
		Route::resource('projects', 'ProjectsController');
		Route::resource('variables', 'VariablesController');
		Route::get('password','RemindersController@index');
		Route::post('password','RemindersController@changePassword');

	});