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
										<th>Segun dictamen N°</th>
										<th>Materia Id</th>
										<th>Materia 1</th>
										<th>Materia 2</th>
										<th>Materia 3</th>
										<th>Materia 4</th>
										<th>Materia 5</th>
										<th>Tiposdocente</th>
										<th>Dedicacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($titulares as $titulare)
                                        
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $titulare->docente->Nombres }}
                                                {{ $titulare->docente->ApellidoPaterno }}
                                                {{ $titulare->docente->ApellidoMaterno }}
                                            </td>

											<td>{{ $titulare->designacion->Dictamen }}</td>
											<td>{{ $titulare->estudio_id }}
                                                {{ $titulare->estudio->Materia }}
                                            </td>
											<td>{{ $titulare->materia01 }}
                                                {{ $titulare->estudio->Materia }}
                                            </td>
											<td>{{ $titulare->materia02 }}
                                                    
                                            </td>
											<td>{{ $titulare->materia03   }}</td>
											<td>{{ $titulare->materia04   }}</td>
											<td>{{ $titulare->materia05   }}</td>
											<td>{{ $titulare->TiposDocente }}</td>
											<td>{{ $titulare->Dedicacion }}</td>

                                            <td>
                                                <form action="{{ route('titulares.destroy',$titulare->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('titulares.show',$titulare->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('titulares.edit',$titulare->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $titulares->links() !!}
            </div>
        </div>
    </div>
@endsection
