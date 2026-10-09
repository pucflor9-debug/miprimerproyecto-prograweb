<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
 // return"Flor Fabiola Puc Balam";
})->name('vista_inicio');

Route::get('/principal', function(){
$datos=[
    "titulo"=>"Tienda Virtual - Vista Principal", 
    "mensaje"=>"Bienvenido a la vista principal",
    "Autor"=>"Flor"];
return view('principal',$datos);
})->name('principal');


Route::get('/mensaje/{id}',function($id){
return "Mostrando el mensaje: {$id}";
})->where('id','[0-9]+');


Route::get('/contact', function(){
$nombre="Flor Fabiola puc balam";
return view('contact', ['nombre'=>$nombre, 'carrera'=>'Administracion en tecnologias de informacion']);
})->name('contact');
