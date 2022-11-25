@extends('adminlte::page')

@section('title', 'dashboard')

@section('content_header')
    <h1>Asignar un rol</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success alert-dismissable">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card body">
          <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Correo Electronico</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th> {{$usuario->name}} </th>
                    <th>{{$usuario->email}}</th>
                </tr>
            </tbody>
            
          </table><br>
          <h2 class="h5">Lista de roles</h2> 
          {!! Form::model($usuario, ['route' =>['usuarios.update', $usuario], 'method' => 'put'])!!}
          @foreach ($roles as $role)
              <div class="div">
                
                  <label>
                      {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                      {{$role->name}}
                  </label>
              </div>
          @endforeach
          {!! Form::submit('Asignar', ['class' => 'btn btn-primary mt-2']) !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
