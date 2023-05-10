@extends('layouts.plantilla')

@section('title', 'registro')
    
@section('content')
<body>
    <form action="{{route('register.verify')}}" method="POST">
        @csrf
        <section class="form-register bg-dark">
            <h3>Registro</h3><br>
            <input class="register bg-dark text-white" type="text" name="name"  placeholder="Ingresa nombre" >
            <input class="register bg-dark text-white" type="text" name="apeA" placeholder="Ingresa apellido paterno" >
            <input class="register bg-dark text-white" type="text" name="apeB"  placeholder="Ingresa apellido materno" >
            <input class="register bg-dark text-white" type="email" name="email"  placeholder="Ingresa email" >
            <input class="register bg-dark text-white"  type="password" name="password"  placeholder="Ingresa contraseña" >
            {{-- <input class="file " type="file" name="img" />  --}}
            <button type="submit" class="btn btn-outline-light ">Registrar</button>
            <a href="{{route('login')}}" class="btn btn-dark">Iniciar sesion</a>
        </section>
    </form>

    
    
</body>

@endsection