@extends('layouts.plantilla')
@section('title', 'index')

@section('content')
<nav class="navbar navbar-expand-lg bg-dark text-white">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">X</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('home')}}">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="{{route('profile')}}">Perfil</a>
          </li>
          <li class="nav-item">
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button type="submit" class="btn text-white">Cerrar sesión</button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>
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