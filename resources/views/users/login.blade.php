@extends('layouts.plantilla')

@section('title', 'login')
    
@section('content')
    <body>
        <form action="{{route('login.verify')}}" method="POST">
            @csrf
            <section class="form-register bg-dark">
                <h3>Login</h3><br>
                <input class="register bg-dark text-white" type="email" name="email"  placeholder="Ingresa email" required>
                <input class="register bg-dark text-white" type="password" name="password"  placeholder="Ingresa contraseña" required>
                <button type="submit" class="btn btn-outline-light">Enviar</button>
                <a href="{{route('register')}}" class="btn btn-dark">Registrar</a>
            </section>
        </form>
    </body>
@endsection