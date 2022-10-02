@extends('plantilla/plantilla')
@section('tituloPagina', 'Crud')
@section('contenido')

<div class="row">
    <h1>Login</h1>

</div>

<br><br>

<div class="card">
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
       <form action="{{route('user.login')}}" method="POST">
            @csrf
            <label for="">Correo</label>
            <input type="email" name="email" class="form-control" required>
            <label for="">Clave</label>
            <input type="password" name="password" class="form-control" required>
            <br>
            <button class="btn btn-primary">Login</button>
            
        </form>
            </div>     
    </div>
  </div>


    
@endsection