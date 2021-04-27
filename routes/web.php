<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get("variables" , function(){
    $mensaje = 20;
    //Función nativa de php : analizar el contenido de la
    //variable: tipo de dato, datos contenidos.
    var_dump($mensaje);
    echo "<hr />";
    $mensaje = "Hola 2242753";
    var_dump($mensaje);
} );

Route::get("arreglos" , function(){
    //Definir un arreglos en php
    //Tamaño: número de elementos de arreglos
    //Tamaño del arreglo estudiantes es 3.
    $estudiantes = [ "AN" => "Ana" ,
                       2  => "Valería" ,
                     "JO" => "Jorge" ];
    echo "<pre>";
    print_r($estudiantes);
    echo "<pre>";

} );

Route::get('paises' , function(){

    $paises = [
        "Colombia" => [
            "Capital" => "Bogotá",
            "Moneda" => "Peso",
            "Población" => 51
        ],
        "Perú" => [
            "Capital" => "Lima",
            "Moneda" => "Sol",
            "Población" => 33
        ],
        "Paraguay" => [
            "Capital" => "Asunción",
            "Moneda" => "Guarani",
            "Población" => 7
        ]
    ];

    //Recorrer el arreglo de paises
    foreach($paises as $índice => $valor){
        echo " $índice ";
        echo "<pre>";
        echo ($valor["Capital"]);
        echo "<pre>";
        echo "<hr />";

    }

});
