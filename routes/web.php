<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\API\clienteController;
// use App\Http\Controllers\API\estadoController;
// use App\Http\Controllers\API\especieController;

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

// Route::get('/cliente', [clienteController::class, '']);
// Route::get('/estado', [estadoController::class, '']);
// Route::get('/especie', [especieController::class, '']);