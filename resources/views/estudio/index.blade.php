
@extends('adminlte::page')
@section('template_title')
    Estudio
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Estudio') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('estudios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear Asignatura') }}
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
                                        
										<th>Sigla</th>
										<th>Materia</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudios as $estudio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estudio->Sigla }}</td>
											<td>{{ $estudio->Materia }}</td>

                                            <td>
                                                <form action="{{ route('estudios.destroy',$estudio->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estudios.show',$estudio->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('estudios.edit',$estudio->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $estudios->links() !!}
            </div>
        </div>
    </div>
@endsection
