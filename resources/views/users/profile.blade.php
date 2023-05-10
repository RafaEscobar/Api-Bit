@extends('layouts.plantilla')

@section('title', 'perfil')
    
@section('content')
    <body>
    <div class="text-white" > 
        <div class="container bg-dark">
            <br>
            <h2>Perfil del usuario</h2>
            <br>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width: 18rem; ">
                        <img src="https://assetsio.reedpopcdn.com/NSwitchDS_KirbysDreamBuffet_1_4.png?width=1200&height=1200&fit=crop&quality=100&format=png&enable=upscale&auto=webp" class="card-img-top" alt="imagen de perfil">
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
    </body>
@endsection