<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComunaController;
use App\Http\Controllers\MunicipioController;
use App\Http\Controllers\DepartamentoController;
use App\Http\Controllers\PaisController;





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


Route::get('/comunas', [ComunaController:: class, 'index'])->name('comunas.index');
Route::post('/comunas', [ComunaController::class, 'store'])->name('comunas.store');
Route::get('/comunas/create', [ComunaController::class , 'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}', [ComunaController::class, 'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}', [ComunaController::class, 'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit', [ComunaController::class , 'edit'])->name('comunas.edit');
Route::get('/municipios', [MunicipioController:: class, 'index'])->name('municipios.index');
Route::post('/municipios', [MunicipioController::class, 'store'])->name('municipios.store');
Route::get('/municipios/create', [MunicipioController::class , 'create'])->name('municipios.create');
Route::delete('/municipios/{municipio}',[MunicipioController::class,'destroy'])->name('municipios.destroy');
Route::put('/municipios/{municipio}', [MunicipioController::class, 'update'])->name('municipios.update');
Route::get('/municipios/{municipio}/edit', [MunicipioController::class , 'edit'])->name('municipios.edit');
Route::get('/departamentos', [DepartamentoController:: class, 'index'])->name('departamento.index');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamento.store');
Route::get('/departamentos/create', [DepartamentoController::class , 'create'])->name('departamento.create');
Route::delete('/departamento/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamento.destroy');
Route::put('/departamento/{departamento}', [DepartamentoController::class, 'update'])->name('departamento.update');
Route::get('/departamento/{departamento}/edit', [DepartamentoController::class , 'edit'])->name('departamento.edit');
Route::get('/pais', [PaisController:: class, 'index'])->name('pais.index');





  