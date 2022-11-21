
@extends('adminlte::page')

@section('template_title')
    Usuario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuario') }}
                            </span>
                        </div>
                        
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <form action="">
                        <div class="form-row">
                            <div class="cold-ms-4">
                                    <input type="form-control" placeholder:"buscar">
                            </div>
                            
                        </div>
                    </form>
                    <div class="card-body">
                    
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">


                            <thead>
                                <tr>
                                    <th>ID</th>
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
                                    <td><a class="btn btn-sm btn-success" href=""><i class="fa fa-fw fa-edit"></i> Edit</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            
                            </table>
                          
                        </div>
                    </div>

                    {{ $usuarios->links() }}

                </div>
                
            </div>
        </div>
    </div>
    
@endsection
