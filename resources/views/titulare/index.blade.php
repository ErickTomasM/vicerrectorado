@extends('adminlte::page')

@section('template_title')
    Titulare
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Titulare') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('titulares.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                                <a href="{{ route('titulares.pdf') }}" class="btn btn-warning btn-sm float-right"  data-placement="left" >
                                    {{ __('Generar PDF') }}
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
                                        
										<th>Docente Id</th>
										<th>Designacion Id</th>
                                        <th>Estudio Id</th>
    									<th>Materia01</th>
										<th>Materia02</th>
										<th>Materia03</th>
										<th>Materia04</th>
										<th>Materia05</th>
										<th>Tiposdocente</th>
										<th>Dedicacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($titulares as $titulare)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>
                                                {{$titulare->docente->Nombres}}
                                                {{$titulare->docente->ApellidoPaterno}}
                                                {{$titulare->docente->ApellidoMaterno}}
                                            </td>
                                                                    
											<td>{{ $titulare->designacion->Dictamen }}
                                                
                                            </td>
                                            <td>
                                                {{$titulare->estudio->Materia}}
                                            </td>
                                            <td>
                                                {{$titulare->materia01}}
                                            </td>
                                                
											
											<td>{{ $titulare->materia02 }}</td>
											<td>{{ $titulare->materia03 }}</td>
											<td>{{ $titulare->materia04 }}</td>
											<td>{{ $titulare->materia05 }}</td>
											<td>{{ $titulare->TiposDocente }}</td>
											<td>{{ $titulare->Dedicacion }}</td>

                                            <td>
                                                <form action="{{ route('titulares.destroy',$titulare->id) }}" method="POST">
                                                    @can('titulares.show')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('titulares.show',$titulare->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    @endcan
                                                    @can('titulares.edit')
                                                    <a class="btn btn-sm btn-success" href="{{ route('titulares.edit',$titulare->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('titulares.destroy')
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
                {!! $titulares->links() !!}
            </div>
        </div>
    </div>
@endsection
