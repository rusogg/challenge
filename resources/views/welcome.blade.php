@extends('plantilla/plantilla')
@section('tituloPagina', 'Crud')
@section('contenido')

<div class="row">
    <h1>{{trans('messages.Ingresar')}}</h1>

</div>

<br><br>

<div class="card">
    <div class="card-header">
        {{trans('messages.Ingresar')}}
    </div>
    <div class="card-body">
       <form action="{{route('user.login')}}" method="POST">
            @csrf
            <label for="">{{trans('messages.Correo')}}</label>
            <input type="email" name="email" class="form-control" required>
            <label for="">{{trans('messages.Clave')}}</label>
            <input type="password" name="password" class="form-control" required>
            <br>
            <button class="btn btn-primary">{{trans('messages.Ingresar')}}</button>
            
        </form>
            </div>     
    </div>
  </div>


    
@endsection