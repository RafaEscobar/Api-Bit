@extends('layouts.plantilla')

@section('title', 'perfil')
    
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
    <div class="text-white" > 
        <div class="container bg-dark">
            <br>
            <h2>Perfil del usuario</h2>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem; ">
                        <p hidden>{{$cadena = str_replace('public/imagenes/', '', Auth::user()->img)}}</p> 
                        <img src="storage/imagenes/{{$cadena}}" class="card-img-top" alt="imagen de perfil">
                        <div class="card-body">
                            <h5 class="card-text text-center" >{{ Auth::user()->name }}</h5>
                             <p class="card-text">Correo electrónico: {{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
            <!-- targeta detalle -->
            <div class="col-sm-9">
                <div class="card">
                    <h5 class="card-header">Detalles</h5>
                    <div class="card-body">
                         <h5 class="card-title">Datos de la cuenta</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-info">Go somewhere</a>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>
@endsection