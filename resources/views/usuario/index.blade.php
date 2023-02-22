
@extends('adminlte::page')


    
@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" >
@endsection


@section('content')
                    
<div class="card-body">

    <table class="table table-striped">

        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th></th>
            </tr>
        </thead>

        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                     <td>{{$usuario->id}}</td>
                     <td>{{$usuario->name}}</td>
                     <td>{{$usuario->email}}</td>
                     <td><a class="btn btn-sm btn-success" href="{{route('usuarios.edit', $usuario)}}"><i class="fa fa-fw fa-edit"></i> Asignar</a></td>
                     
                </tr>
            @endforeach
            
        </tbody>
       
    </table>
</div>                  
<div class="card-footer">
       
    {!! $usuarios->links() !!}
   </div>
@endsection

@section('js')
<sript src="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js" ></sript>    
<sript src="stylesheet" href="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js" ></sript>
<sript src="stylesheet" href="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js" ></sript>
<script>$(document).ready(function () {
    $('#usuarios').DataTable();
});</script>

@stop
 
