
@extends('adminlte::page')

@section('template_title')
    Docente
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Docente') }}
                            </span>

                             <div class="float-right">
                                @can('docentes.create')
                                    <a href="{{ route('docentes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                    {{ __('Create New') }}
                                     </a>
                                @endcan
                                
                              </div>
                              
                                
                              
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                            
                        </div>
                    @endif

                    <div class="card-body">
                    <input wire:model="buscar" type="text" class="form-control" placeholder="buscar">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombres</th>
										<th>Apellidopaterno</th>
										<th>Apellidomaterno</th>
										<th>Ci</th>
										<th>Telefono</th>
										<th>Titulo</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($docentes as $docente)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $docente->Nombres }}</td>
											<td>{{ $docente->ApellidoPaterno }}</td>
											<td>{{ $docente->ApellidoMaterno }}</td>
											<td>{{ $docente->ci }}</td>
											<td>{{ $docente->Telefono }}</td>
											<td>{{ $docente->Titulo }}</td>

                                            <td>
                                                <form action="{{ route('docentes.destroy',$docente->id) }}" method="POST">
                                                    @can('docentes.show')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('docentes.show',$docente->id) }}"><i class="fa fa-fw fa-eye"></i> ver</a>
                                                    @endcan
                                                    @can('docentes.edit')
                                                    <a class="btn btn-sm btn-success" href="{{ route('docentes.edit',$docente->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('docentes.destroy')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                    @endcan
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $docentes->links() !!}
            </div>
        </div>
    </div>
@endsection
