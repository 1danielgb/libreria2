<?php

	get('/', function () {
	    return view("website.index");
	});

	get('/tienda', function () {
	    return view("website.tienda");
	});

	get('/carrito', function () {
	    return view("website.carrito");
	});

	get('/acerca', function () {
	    return view("website.acerca");
	});

	get('/contacto', function () {
	    return view("website.contacto");
	});

	get('/acceder', 'LoginController@index');

	post('/form','ambientesController@store');

	post('/mensajes','mensajesController@store');

	get('/controller','ambientesController@index'); //nombreControlador @ nombreMetodo

	post('/login','LoginController@store');

	get('/usuario',function(){
		$usuario= \DB::table('usuario')->insert([
			'nombre' => 'Daniel',
			'nick' => 'dani',
			'email' => 'dani@dani',
			'password' => \Hash::make('dani'),
			'telefono' => '123456789',
			'tipo' => '1'
			]);
		return 'ok';
	});

	Route::group(['middleware' => 'admin'], function(){
	    get('/administrador','administradorController@index');
	    get('/logout', 'administradorController@logOut');
	    Route::resource('/administrador/libros', 'LibrosController');
	    //post('/administrador/libros/autor','AutorController@store');
	    get('/administrador/libros/autor',function(){
	    	return App\Autor::all();
	    });
	    post('/administrador/libros/autor',function(){
	    	return App\Autor::create(Request::all());
	    });
	    post('/administrador/libros/editorial',function(){
	    	return App\Editorial::create(Request::all());
	    });
	   	post('/administrador/libros/editorial','EditorialController@store');
	});
