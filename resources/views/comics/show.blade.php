@extends('layouts.plantilla')

@section('title', 'show')
    
@section('content')
<nav class="navbar navbar-expand-lg bg-dark text-white">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">X</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('comics.index')}}">Inicio</a>
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
    <div class="bg-white text-white">
        <div class="container bg-dark">
            <div class="row  ">
                <p hidden>
                    {{$fecha = substr($objeto->dates[0]->date, 0, 10);}}
                    {{ $tam = count($objeto1); }}
                </p>
                <div class="col col-lg-6" style="padding-left: 200px">
                    <p hidden>{{$ruta=$objeto->thumbnail->path . '.jpg'}}</p>
                    <img src=" {{$ruta}}" class="card-img-top" >
                </div>
                <div class="col col-lg-6">
                    <h1>{{$objeto->title}}</h1>
                    <p>
                        Volumen: #  <br><br>
                        {{$fecha}}  <br> <br>
                        {{$objeto->pageCount}} páginas

                    </p>
                </div>
            </div>
            <br>
            <div class="row text" style="padding-left:190px">
                <p>Sumary</p>
                <p>Collects: {{$objeto->stories->items[0] ->name}} </p>
                <p>
                    {{$objeto->description}}
                </p>
            </div>     
            <div class="d-fljustify-content-lg-end" style="padding-left:190px">
                <p class="fs-4">Personajes</p>
                <div class="row">
                    @for ($i = 0; $i < $tam; $i++)
                        @foreach ($objeto1[$i]->data->results as $key)
                        <p hidden>{{$per = $key->thumbnail->path . '.jpg'}}</p>    
                        <div class="col-2">
                            <img src="{{$per}}" class=" rounded-circle mb-4" alt="..." width="100" height="100">
                            <p class="text-center">{{$key->name}}</p>
                        </div>
                        @endforeach
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection