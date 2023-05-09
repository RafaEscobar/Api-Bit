@extends('layouts.plantilla')
@section('title', 'index')

@section('content')

    <h1>Pagina principal de comics</h1>
    @foreach ($comics->data->results as $comic)
            <li>{{ $comic->title }}</li>
    @endforeach
    <div class="card" style="width: 18rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>

@endsection