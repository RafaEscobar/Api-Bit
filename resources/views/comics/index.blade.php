@extends('layouts.plantilla')
@section('title', 'index')

@section('content')

    <h1>Pagina principal de comics</h1>
    @foreach ($comics->data->results as $comic)
            <li>{{ $comic->title }}</li>
    @endforeach

@endsection