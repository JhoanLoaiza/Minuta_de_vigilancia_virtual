<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalController;

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

//CRUD de Personals
Route::resource('personals', PersonalController::class); //crear 7 rutas para CRUD 
//route::get('personal', [PersonalController::class, 'index']);


Route::get('/', function () {
    $botonesdenavegacion = [
    ["nombre" => "Inicio"],
   
    ];
    $nombre = "";
    return view('welcome', ["botonesdenavegacion" => $botonesdenavegacion], ["nombre" => $nombre]);
});
//Route:: view("/contacto", "contacto");
    

