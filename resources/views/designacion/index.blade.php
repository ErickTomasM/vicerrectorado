
@extends('adminlte::page')
@section('template_title')
    Designacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Designacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('designacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Desgnacion') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Horario Id</th>
										<th>Docente</th>
										<th>Estudio Id</th>
										<th>Resolucion</th>
										<th>Dictamen</th>
										<th>Numerocarta</th>
										<th>Facultad</th>
										<th>Tipodocente</th>
										<th>Gestion</th>
										<th>Convocatoria</th>
										<th>Fechadesignacion</th>
										<th>Asignaturas</th>
										<th>Cargahoraria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($designacions as $designacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $designacion->horario_id }}</td>
											<td>
                                                {{ $designacion->docente->Nombres }}
                                                {{ $designacion->docente->ApellidoPaterno }}
                                                {{ $designacion->docente->ApellidoMaterno }}
                                            </td>
											<td>{{ $designacion->estudio_id }}</td>
											<td>{{ $designacion->Resolucion }}</td>
											<td>{{ $designacion->Dictamen }}</td>
											<td>{{ $designacion->NumeroCarta }}</td>
											<td>{{ $designacion->Facultad }}</td>
											<td>{{ $designacion->TipoDocente }}</td>
											<td>{{ $designacion->Gestion }}</td>
											<td>{{ $designacion->Convocatoria }}</td>
											<td>{{ $designacion->FechaDesignacion }}</td>
											<td>{{ $designacion->Asignaturas }}</td>
											<td>{{ $designacion->CargaHoraria }}</td>

                                            <td>
                                                <form action="{{ route('designacions.destroy',$designacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-warning " href="{{ route('designacions.pdf',$designacion->id) }}"><i class="fa fa-fw fa-eye"></i> PDF</a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('designacions.show',$designacion->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('designacions.edit',$designacion->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $designacions->links() !!}
            </div>
        </div>
    </div>
@endsection
