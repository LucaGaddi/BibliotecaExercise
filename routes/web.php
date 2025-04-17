<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});

// Lista dei libri
Route::get('/books', [BookController::class, 'index'])->name('books.index');

// Form per creare un nuovo libro
Route::get('/books/create', [BookController::class, 'create'])->name('books.create');

// Salvataggio del nuovo libro
Route::post('/books', [BookController::class, 'store'])->name('books.store');

// Form per modificare un libro esistente
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');

// Aggiornamento del libro
Route::put('/books/{book}', [BookController::class, 'update'])->name('books.update');

// Eliminazione del libro
Route::delete('/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');

// Tutto ciò che abbiamo scritto finora può essere sostituito con una sola riga:

//Route::resource('books', BookController::class);
