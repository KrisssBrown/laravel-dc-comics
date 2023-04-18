@extends('layouts.app')

@section('content')
    <div class="my-container d-flex justify-content-center">

        <div class="card" style="width: 700px;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{!! $comic->description !!}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">${{ $comic->price }}</li>
                <li class="list-group-item">{{ $comic->series }}</li>
                <li class="list-group-item">{{ $comic->sale_date }}</li>
                <li class="list-group-item">{{ $comic->type }}</li>
            </ul>
            <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>
@endsection
