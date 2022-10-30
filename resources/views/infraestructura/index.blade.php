
@extends('adminlte::page')
@section('template_title')
    Infraestructura
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Infraestructura') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('infraestructuras.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create Infraestructura') }}
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
                                        
										<th>Ambiente</th>
										<th>Piso</th>
										<th>Descripcion</th>
										<th>Capacidad</th>
										<th>Equipamiento</th>
										<th>Ubicacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($infraestructuras as $infraestructura)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $infraestructura->Ambiente }}</td>
											<td>{{ $infraestructura->Piso }}</td>
											<td>{{ $infraestructura->Descripcion }}</td>
											<td>{{ $infraestructura->Capacidad }}</td>
											<td>{{ $infraestructura->Equipamiento }}</td>
											<td>{{ $infraestructura->Ubicacion }}</td>

                                            <td>
                                                <form action="{{ route('infraestructuras.destroy',$infraestructura->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('infraestructuras.show',$infraestructura->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('infraestructuras.edit',$infraestructura->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $infraestructuras->links() !!}
            </div>
        </div>
    </div>
@endsection
