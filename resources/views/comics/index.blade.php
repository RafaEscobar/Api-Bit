@extends('layouts.plantilla')
@section('title', 'index')

@section('content')            
<header>
    <nav class="navbar bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown link
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
            </div>
        </div>
    </nav>
</header>
        <div class="container text-center">
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