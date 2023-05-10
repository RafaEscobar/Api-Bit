@extends('layouts.plantilla')

@section('title', 'login')
    
@section('content')
    <body>
        <section class="form-register bg-dark">
            <h3>Login</h3><br>
            <input class="register bg-dark" type="email" name="email"  placeholder="Ingresa email" required>
            <input class="register bg-dark" type="password" name="password"  placeholder="Ingresa contraseña" required>
            <button type="submit" class="btn btn-outline-light">Registrar</button>
        </section>
    </body>
@endsection