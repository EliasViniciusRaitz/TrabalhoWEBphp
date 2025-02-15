<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TurmaController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\EstudanteController;
use App\Http\Controllers\ProfessorController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('turmas', TurmaController::class);

Route::resource('cursos', CursoController::class);

Route::resource('professores', ProfessorController::class);

Route::resource('estudantes', EstudanteController::class);

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [PerfilController::class, 'edit'])->name('perfil.editar');
    Route::patch('/perfil', [PerfilController::class, 'update'])->name('perfil.atualizar');
    Route::delete('/perfil', [PerfilController::class, 'destroy'])->name('perfil.deletar');
});
