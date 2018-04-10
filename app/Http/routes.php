<?php

	Route::get('/Admin',['uses' => 'adminController@index']);

	Route::get('/Admin/perfil/{id}',['uses' => 'adminController@perfil']);

	Route::get('/Admin/MyFiles/{id}',['uses' => 'adminController@myFilesView']);
	Route::get('/Admin/{idView}',['uses' => 'adminController@createViewDinamyn']);
	Route::get('/Admin/crear/{idView}',['uses' => 'adminController@createViewDinamyn']);
	Route::get('/Admin/subir/{idView}',['uses' => 'adminController@createViewDinamyn']);

	Route::post('/Admin/cambioPerfil/',['uses' => 'adminController@cambiosPerfiles']);

	Route::get('/Admin/buscar-usuario/get',['uses' => 'adminController@buscarUsuario']);

	Route::post('/Admin/buscar-usuario/setUpdateEnableUser',['uses' => 'adminController@activeordesable']);
	Route::post('/Admin/buscar-usuario/setUpdateDisableUser',['uses' => 'adminController@activeordesable']);

	Route::get('/Admin/buscar-usuario/authConfirm',['uses' =>'adminController@confirmAuth']);



	Route::post('/Admin/registrar/usuario',['uses' => 'adminController@registerUsers']);

	Route::post('/Admin/registrar/agenda',['uses' => 'adminController@registerAgenda']);

	Route::get('/Admin/viewPerfil/{id}',['uses' => 'adminController@perfilUserView']);

  Route::get('/',['uses' => 'mainController@index']);

	Route::get('/Multimedia',['uses' => 'multimediaController@index']);
	Route::get('/Multimedia/Videos',['uses' => 'multimediaController@watch']);
	Route::get('/Multimedia/Audios',['uses' => 'multimediaController@audio']);
	Route::get('/Multimedia/Galeria',['uses' => 'multimediaController@gallery']);

	Route::resource("/login","loginController");
	Route::get('/LoadConfig/{id}',['uses' => 'loginController@load']);

	Route::get("/logout","loginController@logout");



	Route::get('error', function(){
	    abort(500);
	});
