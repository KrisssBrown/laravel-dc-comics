@extends('layouts.app')

@section('content')
    <div class="my-container">
        <h1>Nuovo Comic</h1>

        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Inserisci titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" id="description" rows="5" name="description"></textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine (url)</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Inserisci prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Inserisci Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Inserisci data di rilascio</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Inserisci tipo</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary mb-3">Aggiungi Comic</button>
            </div>

        </form>
        
    </div>
@endsection
