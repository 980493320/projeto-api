<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\buscarCepController;
use App\Http\Controllers\pdfController;


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

Route::get('/', [buscarCepController::class, 'index']);
Route::get('/adicionar', [buscarCepController::class, 'adicionar']);
Route::get('/editar/{id}', [buscarCepController::class, 'editar']);
Route::get('/buscar', [buscarCepController::class, 'buscar'])->name('buscar');
Route::post('/salvar', [buscarCepController::class, 'salvar']);
Route::put('/alterar', [buscarCepController::class, 'alterar']);
Route::delete('/excluir/{id}', [buscarCepController::class, 'excluir']);
Route::get('/pdf', [pdfController::class, 'geraPdf']);

