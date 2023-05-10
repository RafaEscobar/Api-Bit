@extends('layouts.plantilla')

@section('title', 'registro')
    
@section('content')
<body>

    <section class="form-register bg-dark">
        <h3>Registro</h3><br>
        <input class="register bg-dark" type="text" name="nombre"  placeholder="Ingresa nombre" required>
        <input class="register bg-dark" type="text" name="apellidoA" placeholder="Ingresa apellido paterno" required>
        <input class="register bg-dark" type="text" name="apellidoB"  placeholder="Ingresa apellido materno" required>
        <input class="register bg-dark" type="email" name="email"  placeholder="Ingresa email" required>
        <input class="register bg-dark" type="password" name="password"  placeholder="Ingresa contraseña" required>
        <input class="file " type="file" name="fotoPerf" /> 
        <button type="submit" class="btn btn-outline-light">Registrar</button>
    </section>
    
</body>

@endsection