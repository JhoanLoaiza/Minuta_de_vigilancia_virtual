<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstitucionalController;

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

Route::view('/', 'welcome');

Route::get('institucionals', [InstitucionalController::class, 'index'])->name('institucionals.index');







Route::get('/', function () {
    $botonesdenavegacion = [
    ["nombre" => "Inicio"],
   
    ];
    $nombre = "";
    return view('welcome', ["botonesdenavegacion" => $botonesdenavegacion], ["nombre" => $nombre]);
});
//Route:: view("/contacto", "contacto");