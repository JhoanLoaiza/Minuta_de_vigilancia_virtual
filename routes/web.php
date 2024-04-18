<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $botonesdenavegacion = [
    ["nombre" => "Inicio"],
    ["nombre" => "formatos"],
    ["nombre" => "Constancias"],
    ["nombre" => "Utilitarios"],
    ["nombre" => "Salir"],
    ];
    $nombre = "";
    return view('welcome', ["botonesdenavegacion" => $botonesdenavegacion], ["nombre" => $nombre]);
});
//Route:: view("/contacto", "contacto");
    

