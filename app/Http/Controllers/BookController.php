<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        // Logica per visualizzare la lista dei libri
        $books = Book::all(); // Recupera tutti i libri dal database
        return view('books.index', compact('books')); // Passa i libri alla vista (Se utilizziamo Blade, altrimenti normalmente si ritorna un json)
    }

    public function create(){
        return view('books.create'); // Mostra il form per creare un nuovo libro
    }

    public function store(Request $request) {
        // Logica per salvare un nuovo libro
        $validatedData = request()->validate([
            'titolo' => 'required|string|max:255',
            'autore' => 'required|string|max:255',
            'anno' => 'required|integer',
            'genere' => 'required|string|max:255',
            'descrizione' => 'nullable|string',
        ]);

        Book::create($validatedData); // Crea un nuovo libro nel database

        return redirect()->route('books.index'); // Reindirizza alla lista dei libri
    }

    // Form per modificare un libro esistente
    public function edit(Book $book)
    {
        return view('books.edit', compact('book')); // Passa il libro da modificare alla vista
    }

    // Aggiornamento del libro
    public function update(Request $request, Book $book)
    {
        // Validazione dei dati inviati dal form
        $request->validate([
            'titolo' => 'required|string|max:255',
            'autore' => 'required|string|max:255',
            'anno' => 'required|integer',
            'genere' => 'required|string|max:100',
            'descrizione' => 'required|string',
        ]);

        // Aggiornamento del libro esistente
        $book->update($request->all());

        // Redirect alla lista dei libri con un messaggio di successo
        return redirect()->route('books.index')->with('success', 'Libro aggiornato con successo!');
    }

    // Eliminazione del libro
    public function destroy(Book $book)
    {
        // Eliminazione del libro dal database
        $book->delete();

        // Redirect alla lista dei libri con un messaggio di successo
        return redirect()->route('books.index')->with('success', 'Libro eliminato con successo!');
    }
}