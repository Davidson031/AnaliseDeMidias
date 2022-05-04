<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;


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

Route::post('/image-resize', [FileController::class, 'imgResize'])->name('img-resize');

Route::get('/criar', [\App\Http\Controllers\AnaliseController::class, 'criar_analise'])->name('criar');

Route::post('/criar', [\App\Http\Controllers\AnaliseController::class, 'salvar_analise'])->name('criar');

Route::get('/testes', [\App\Http\Controllers\AnaliseController::class, 'teste']);

Route::get('/{tipo?}', [\App\Http\Controllers\AnaliseController::class, 'exibir_lista'])->name('principal');

Route::get('/analise/{id}', [\App\Http\Controllers\AnaliseController::class, 'exibir_analise']);

Route::post('/salvar_comentario/{id}', [\App\Http\Controllers\ComentarioController::class, 'salvar'])->name('salvar_comentario');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
