@extends('layouts.plantilla')
@section('title', 'index')

@section('content')            
        <div class="container text-center bg-dark">
            <div class="row">
                @foreach ($comics->data->results as $comic)
                <p hidden>{{$ruta=$comic->thumbnail->path . '.jpg'}}</p>

                <div class="col-3  ">
                    
                    <a class="link" href="{{route('comics.show', $comic->id)}}">
                        <div class="card mt-3 mb-3 border border-0" >
                            <img src=" {{$ruta}}" class="card-img-top" alt="..." height="400">
                            <div class="card-body carta">
                                <p class="card-text ">{{ $comic->title }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
@endsection