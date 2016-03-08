<?php

	

	Route::get('/', ['middleware' => 'web', function () {
	    return view('index');
	}]);

	Route::group(['middleware' => ['web']], function () {		

		Route::get('/ingreso', 'AuthController@getIngreso');
		Route::post('/ingreso', 'AuthController@postIngreso');
		Route::get('/registro', 'AuthController@getRegistro');
		Route::post('/registro', 'AuthController@postRegistro');
		Route::get('/desloguear', 'AuthController@getDesloguear');
	});


