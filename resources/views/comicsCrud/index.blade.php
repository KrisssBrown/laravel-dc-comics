@extends('layouts.app')

@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Copertina</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Serie</th>
                <th scope="col">Data di rilascio</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comic as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td><a href="{{ route('comics.show', $comic->id) }}">
                            {{ $comic->title }}
                        </a></td>
                    <td><img src="{{ $comic->thumb }}"></td>
                    <td>{{ $comic->description }}</td>
                    <td>${{ $comic->price }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->sale_date }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>
                        <button type="submit" class="btn btn-warning">Modifica</button>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
