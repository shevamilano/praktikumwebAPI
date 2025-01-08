<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\BudayaController;

Route::get('/budaya', [BudayaController::class, 'index'])->name('budaya.index');
Route::get('/budaya/create', [BudayaController::class, 'create'])->name('budaya.create');
Route::post('/budaya', [BudayaController::class, 'store'])->name('budaya.store');
Route::get('/budaya/{id}/edit', [BudayaController::class, 'edit'])->name('budaya.edit');
Route::put('/budaya/{id}', [BudayaController::class, 'update'])->name('budaya.update');
Route::delete('/budaya/{id}', [BudayaController::class, 'destroy'])->name('budaya.destroy');
