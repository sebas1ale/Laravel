<?php

//use App\Http\Controllers\EjemploController;
use App\Http\Controllers\Ejemplo3Controller;
use Illuminate\Support\Facades\Route;

//utilizando los controllers ya creados:
route::resource("posts",Ejemplo3Controller::class);


/*
Route::get('/inicioo', [EjemploController::class, 'inicio']);

Route::get('/', [Ejemplo3Controller::class, 'index']);
Route::get('/inicio', [Ejemplo3Controller::class, 'index']);

//pasar parametros a los controladores:
Route::get('/foro/{id}', [Ejemplo3Controller::class, 'showForo']);
Route::get('/quienesSomos', [Ejemplo3Controller::class, 'quienesSomos']);
Route::get('/dondeEstamos', [Ejemplo3Controller::class, 'dondeEstamos']);
*/
/*
Route::get('/home', function () {
    return view('welcome');
});

Route::get('/post/{id}', function ($id) {
    return 'Este es el post n°'. $id;
});

//expresiones regulares en php
Route::get('/variosPara/{id}/{nombre}', function ($id, $nombre) {
    return 'Este es el posttttt n°'. $id .' y el nombre: '. $nombre;
})-> where(array('id','[0-9]+','nombre' => '[a-zA-Z]+'));

Route::get('/variosParam/{id}/{nombre}', function ($id, $nombre) {
    return 'Este es el post n°'. $id .' y el nombre: '. $nombre;
});

Route::get('/inicio', [EjemploController::class, 'inicio']);

Route::get('/index', [Ejemplo3Controller::class, 'index']);
*/