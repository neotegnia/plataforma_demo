<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

 
Route::get('/', function () {
    return view('welcome'); //Invoca a un archivo  en el directorio /resources/views
});

Route::get('/saludo', function(){ 

    return "<h1>HOLA AMIGOS</h1>";
});

Route::get('/login', function(){    
    
    return view('show-login');
});

Route::get('/login',[AuthController::class ,'inicio']); //Código más limpio
Route::post('/bienvenida',[AuthController::class ,'bienvenida']); 
Route::get('/miperfil',[AuthController::class ,'mi_perfil']);
Route::get('/salir',[AuthController::class ,'logout']);
/*Route::post('/bienvenida', function(){  //RECIBE DATOS DE FORMULARIO
    return view('ingresaste');
});*/