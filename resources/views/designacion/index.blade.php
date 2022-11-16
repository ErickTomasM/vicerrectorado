@extends('layouts.app')

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
                                  {{ __('Create New') }}
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
                                        
										<th>Fechadesignacion</th>
										<th>Resolucion</th>
										<th>Dictamen</th>
										<th>Numerocarta</th>
										<th>Facultad</th>
										<th>Carrera</th>
										<th>Gestion</th>
										<th>Semestre</th>
										<th>Convocatoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($designacions as $designacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $designacion->FechaDesignacion }}</td>
											<td>{{ $designacion->Resolucion }}</td>
											<td>{{ $designacion->Dictamen }}</td>
											<td>{{ $designacion->NumeroCarta }}</td>
											<td>{{ $designacion->Facultad }}</td>
											<td>{{ $designacion->Carrera }}</td>
											<td>{{ $designacion->Gestion }}</td>
											<td>{{ $designacion->Semestre }}</td>
											<td>{{ $designacion->Convocatoria }}</td>

                                            <td>
                                                <form action="{{ route('designacions.destroy',$designacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('designacions.show',$designacion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('designacions.edit',$designacion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
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
