<?php

use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;



Route::middleware(['auth'])->group(function () {
     Route::get('/logout', [SessionController::class, 'create'])->name('logout');
    Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout');
    
    Route::redirect('/', '/notes');
    Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
    Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
    Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
    Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
    Route::put('/notes/{note}/edit', [NoteController::class, 'update'])->name('notes.update');
    Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');
    Route::delete('/notes/{note}', [NoteController::class, 'destroy'] )->name('notes.destroy');
});

Route::middleware(['guest'])->group(function (){
    Route::get('/register', [RegisterUserController::class, 'create'])->name('register.create');
    Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');
    
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('login.create');
});