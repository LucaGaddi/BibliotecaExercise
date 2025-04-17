@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-plus-circle me-2"></i>Aggiungi Nuovo Libro
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('books.store') }}" method="POST">
                    @csrf

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="titolo" name="titolo" 
                                       value="{{ old('titolo') }}" required>
                                <label for="titolo">Titolo</label>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="autore" name="autore" 
                                       value="{{ old('autore') }}" required>
                                <label for="autore">Autore</label>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="anno" name="anno" 
                                       value="{{ old('anno') }}" required>
                                <label for="anno">Anno</label>
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="genere" name="genere" 
                                       value="{{ old('genere') }}" required>
                                <label for="genere">Genere</label>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="descrizione" name="descrizione" 
                                          style="height: 120px" required>{{ old('descrizione') }}</textarea>
                                <label for="descrizione">Descrizione</label>
                            </div>
                        </div>
                        
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary px-4">
                                <i class="fas fa-save me-2"></i>Salva Libro
                            </button>
                            <a href="{{ route('books.index') }}" class="btn btn-secondary">
                                <i class="fas fa-arrow-left me-2"></i> Annulla
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection