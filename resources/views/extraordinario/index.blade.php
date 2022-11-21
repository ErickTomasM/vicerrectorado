@extends('layouts.app')

@section('template_title')
    Extraordinario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Extraordinario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('extraordinarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Docente Id</th>
										<th>Designacion Id</th>
										<th>Estudio Id</th>
										<th>Estudio1</th>
										<th>Estudio2</th>
										<th>Estudio3</th>
										<th>Estudio4</th>
										<th>Estudio5</th>
										<th>Tiposdocente</th>
										<th>Dedicacion</th>
										<th>Convocatoria</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($extraordinarios as $extraordinario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $extraordinario->docente_id }}</td>
											<td>{{ $extraordinario->designacion_id }}</td>
											<td>{{ $extraordinario->estudio_id }}</td>
											<td>{{ $extraordinario->estudio1 }}</td>
											<td>{{ $extraordinario->estudio2 }}</td>
											<td>{{ $extraordinario->estudio3 }}</td>
											<td>{{ $extraordinario->estudio4 }}</td>
											<td>{{ $extraordinario->estudio5 }}</td>
											<td>{{ $extraordinario->TiposDocente }}</td>
											<td>{{ $extraordinario->Dedicacion }}</td>
											<td>{{ $extraordinario->Convocatoria }}</td>

                                            <td>
                                                <form action="{{ route('extraordinarios.destroy',$extraordinario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('extraordinarios.show',$extraordinario->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('extraordinarios.edit',$extraordinario->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $extraordinarios->links() !!}
            </div>
        </div>
    </div>
@endsection
