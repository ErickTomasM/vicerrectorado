@extends('adminlte::page')

@section('template_title')
    Consultore
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Consultore') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('consultores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
										<th>Materiac01</th>
										<th>Materiac02</th>
										<th>Materiac03</th>
										<th>Materiac04</th>
										<th>Materiac05</th>
										<th>Dedicacion</th>
										<th>Contrato</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($consultores as $consultore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $consultore->docente->Nombres }}
                                                {{ $consultore->docente->ApellidoPaterno }}
                                                {{ $consultore->docente->ApellidoMaterno }}
                                            </td>
											<td>{{ $consultore->designacion->Dictamen}}</td>
											<td>{{ $consultore->estudio->Materia }}</td>
                                            
											<td>{{ $consultore->materiaC01 }}</td>
											<td>{{ $consultore->materiaC02 }}</td>
											<td>{{ $consultore->materiaC03 }}</td>
											<td>{{ $consultore->materiaC04 }}</td>
											<td>{{ $consultore->materiaC05 }}</td>
											<td>{{ $consultore->Dedicacion }}</td>
											<td>{{ $consultore->contrato }}</td>

                                            <td>
                                                <form action="{{ route('consultores.destroy',$consultore->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('consultores.show',$consultore->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('consultores.edit',$consultore->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $consultores->links() !!}
            </div>
        </div>
    </div>
@endsection
