<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\VisitController;

Route::post('/language', [LanguageController::class, 'switch'])->name('language.switch');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contato', [HomeController::class, 'index'])->name('contato');
Route::post('/visita', [VisitController::class, 'record'])->name('visita.record');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --------------------------------------------------------------------------
// Rotas da Home (Estrutura temporária para navegação)
// --------------------------------------------------------------------------

// Repositório
Route::get('/repositorio', function () {
    return 'Página do Repositório (Em desenvolvimento)';
})->name('repositorio.index');

// Produção
Route::get('/producao', function () {
    return 'Página de Produção (Em desenvolvimento)';
})->name('producao.index');

// Projeto
Route::get('/projeto', function () {
    return 'Página do Projeto (Em desenvolvimento)';
})->name('projeto.index');

// Accessercise
Route::get('/accessercise', function () {
    return 'Página Accessercise (Em desenvolvimento)';
})->name('accessercise');

// Contato
Route::get('/contato', function () {
    return 'Página de Contato (Em desenvolvimento)';
})->name('contato');

require __DIR__.'/auth.php';
