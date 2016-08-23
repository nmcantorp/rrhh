<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');
});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware'=>'auth'], function() {
    Route::resource('users', 'UserController');
	Route::get('users/{id}/destroy',[
		'uses' 	=> 'UserController@destroy',
		'as'	=> 'admin.users.destroy'
		]);

	Route::get('users/{id}/step2',[
		'uses' 	=> 'UserController@step2',
		'as'	=> 'admin.users.step2'
		]);

	Route::post('users/savestep2',[
		'uses' 	=> 'UserController@step2save',
		'as'	=> 'admin.users.step2store'
		]);

	Route::get('users/{id}/step3',[
		'uses' 	=> 'UserController@step3',
		'as'	=> 'admin.users.step3'
		]);

	Route::post('users/savestep3',[
		'uses' 	=> 'UserController@step3save',
		'as'	=> 'admin.users.step3store'
		]);

	Route::get('users/{id}/step4',[
		'uses' 	=> 'UserController@step4',
		'as'	=> 'admin.users.step4'
		]);

	Route::post('users/savestep4',[
		'uses' 	=> 'UserController@step4save',
		'as'	=> 'admin.users.step4store'
		]);
	/*Paises*/
	Route::resource('paises', 'PaisesController');
	Route::get('paises/destroy/{id}',[
		'uses' 	=> 'PaisesController@destroy',
		'as'	=> 'admin.paises.destroy'
		]);

	/*Organizaciones*/
	Route::resource('organizaciones', 'Admin\OrganizacionesController');
	Route::get('admin/organizaciones/{organizaciones}',[
		'as'=> 'admin.organizaciones.destroy', 
		'uses' => 'Admin\OrganizacionesController@destroy'
		]);

});

/* route para ajax de parentescos */
Route::get('/getParent/{id_parent}','UserController@getParent');

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::group(['prefix' => 'v1'], function () {
        require config('infyom.laravel_generator.path.api_routes');
    });
});


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');

/*Route::get('admin/organizaciones', ['as'=> 'admin.organizaciones.index', 'uses' => 'Admin\OrganizacionesController@index']);
Route::post('admin/organizaciones', ['as'=> 'admin.organizaciones.store', 'uses' => 'Admin\OrganizacionesController@store']);
Route::get('admin/organizaciones/create', ['as'=> 'admin.organizaciones.create', 'uses' => 'Admin\OrganizacionesController@create']);
Route::put('admin/organizaciones/{organizaciones}', ['as'=> 'admin.organizaciones.update', 'uses' => 'Admin\OrganizacionesController@update']);
Route::patch('admin/organizaciones/{organizaciones}', ['as'=> 'admin.organizaciones.update', 'uses' => 'Admin\OrganizacionesController@update']);
Route::delete('admin/organizaciones/{organizaciones}', ['as'=> 'admin.organizaciones.destroy', 'uses' => 'Admin\OrganizacionesController@destroy']);
Route::get('admin/organizaciones/{organizaciones}', ['as'=> 'admin.organizaciones.show', 'uses' => 'Admin\OrganizacionesController@show']);

Route::get('admin/organizaciones/{organizaciones}/edit', ['as'=> 'admin.organizaciones.edit', 'uses' => 'Admin\OrganizacionesController@edit']);*/
