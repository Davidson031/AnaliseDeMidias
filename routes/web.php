<?php

use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';
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

Route::get('/', [\App\Http\Controllers\AnaliseController::class, 'principal']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/criar', [\App\Http\Controllers\AnaliseController::class, 'criar_analise'])->name('criar')->middleware('auth');

Route::post('/criar', [\App\Http\Controllers\AnaliseController::class, 'salvar_analise'])->name('criar')->middleware('auth');

Route::get('/testes', [\App\Http\Controllers\AnaliseController::class, 'teste']);

Route::get('/{tipo?}', [\App\Http\Controllers\AnaliseController::class, 'exibir_lista'])->name('principal');

Route::get('/analise/{id}', [\App\Http\Controllers\AnaliseController::class, 'exibir_analise']);

Route::post('/salvar_comentario/{id}', [\App\Http\Controllers\ComentarioController::class, 'salvar'])->name('salvar_comentario');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/deletarcomentario/{id}', [\App\Http\Controllers\ComentarioController::class, 'deletar_comentario'])->name('deletar')->middleware('auth');




