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
                                @can('estudios.create');
                                <a href="{{ route('estudios.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Sigla</th>
										<th>Materia</th>
										<th>Horas Teoricas</th>
										<th>Horas Practicas</th>
                                        <th>Horas Totales</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($estudios as $estudio)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $estudio->Sigla }}</td>
											<td>{{ $estudio->Materia }}</td>
											<td>{{ $estudio->Horast }}</td>
											<td>{{ $estudio->Horasp }}</td>

                                            <td>
                                                <?php 
                                                      $a =   $estudio->Horast + $estudio->Horasp;
                                                     echo $a;
                                                ?>
                                                
                                            </td>

                                            <td>
                                                <form action="{{ route('estudios.destroy',$estudio->id) }}" method="POST">
                                                    @can('estudios.show')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('estudios.show',$estudio->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    @endcan

                                                    @can('estudios.edit')
                                                    <a class="btn btn-sm btn-success" href="{{ route('estudios.edit',$estudio->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('estudios.delete')
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
                {!! $estudios->links() !!}
            </div>
        </div>
    </div>
@endsection
