@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="fas fa-book me-2"></i> Elenco Libri
        </h1>
        <a href="{{ route('books.create') }}" class="btn btn-primary">
            <i class="fas fa-plus me-1"></i> Nuovo Libro
        </a>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th>Titolo</th>
                            <th>Autore</th>
                            <th>Anno</th>
                            <th>Genere</th>
                            <th>Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td><strong>{{ $book->titolo }}</strong></td>
                                <td>{{ $book->autore }}</td>
                                <td>{{ $book->anno }}</td>
                                <td>
                                    <span class="badge bg-primary">{{ $book->genere }}</span>
                                </td>
                                <td class="action-buttons">
                                    <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('books.destroy', $book) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Sei sicuro?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <button class="btn btn-sm btn-info" data-bs-toggle="collapse" data-bs-target="#desc-{{ $book->id }}">
                                        <i class="fas fa-info-circle"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr class="collapse" id="desc-{{ $book->id }}">
                                <td colspan="5">
                                    <div class="p-3 bg-light rounded">
                                        <h6>Descrizione:</h6>
                                        <p>{{ $book->descrizione }}</p>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection