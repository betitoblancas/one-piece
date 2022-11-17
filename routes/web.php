<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArcoController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\PersonajesController;
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
Route::get('/arco', [ArcoController::class, 'Arco']);
Route::get('/autor', [AutorController::class, 'Autor']);
Route::get('/personajes', [PersonajesController::class, 'Personajes']);
Route::get('/', function () {
    return view('welcome');
});
