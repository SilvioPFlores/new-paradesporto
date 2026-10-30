<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\VisitController;
use Illuminate\Support\Facades\Route;

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
Route::get('/projeto', [ProjectController::class, 'index'])->name('projeto.index');

// Accessercise
Route::get('/accessercise', function () {
    return view('pages.accessercise');
})->name('accessercise');

// Contato
Route::get('/contato', [ContactController::class, 'index'])->name('contato');
Route::post('/contato', [ContactController::class, 'send'])->name('contato.send');

require __DIR__.'/auth.php';
