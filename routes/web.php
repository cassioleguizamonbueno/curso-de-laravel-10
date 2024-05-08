<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\ClientesController;

Route::get('/', function () {
    return view('welcome');
});


Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
Route::put('/supports/{id}', [SupportController::class, 'update'])->name('supports.update');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
//Route::get('/contato', [SiteController::class, 'contact']);

Route::delete('/clientes/{id}', [ClientesController::class, 'destroy'])->name('clientes.destroy');
Route::put('/clientes/{id}', [ClientesController::class, 'update'])->name('clientes.update');
Route::get('/clientes/{id}/edit', [ClientesController::class, 'edit'])->name('clientes.edit');
Route::get('/clientes/create', [ClientesController::class, 'create'])->name('clientes.create');
Route::get('/clientes/{id}', [ClientesController::class, 'show'])->name('clientes.show');
Route::post('/clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::get('/clientes', [ClientesController::class, 'index'])->name('clientes.index');
