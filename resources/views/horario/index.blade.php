@extends('layouts.app')

@section('template_title')
    Horario
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Horario') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('horarios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        <th>N°</th>
                                        <th>Nombres</th>
										<th>Asignar</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                    @foreach ($docentes as $docente)
                                        
                                        <tr>
                                            <td> {{ ++$i }}</td>
											<td>{{ $docente->Nombres}}
                                                {{ $docente->ApellidoPaterno }}
                                                {{ $docente->ApellidoMaterno }}
                                            </td>
                                            <td>
                                                
                                                @foreach ($horarios as $horario)
                                                @csrf
                                                <a class="btn btn-sm btn-primary " href="{{ route('horarios.show',$horario->id) }}"><i class="fa fa-fw fa-eye"></i> Asignar</a>   
                                                @endforeach
                                            </td>
                                        </tr>
                                       
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $horarios->links() !!}
            </div>
        </div>
    </div>
@endsection
