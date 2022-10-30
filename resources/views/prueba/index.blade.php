@extends('adminlte::page')

@section('template_title')
    Prueba
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Prueba') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pruebas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Nombres</th>
										<th>Apellidopaterno</th>
										<th>Apellidomaterno</th>
										<th>Ci</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pruebas as $prueba)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $prueba->Nombres }}</td>
											<td>{{ $prueba->ApellidoPaterno }}</td>
											<td>{{ $prueba->ApellidoMaterno }}</td>
											<td>{{ $prueba->ci }}</td>
											<td>{{ $prueba->Telefono }}</td>

                                            <td>
                                                <form action="{{ route('pruebas.destroy',$prueba->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('pruebas.show',$prueba->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('pruebas.edit',$prueba->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $pruebas->links() !!}
            </div>
        </div>
    </div>
@endsection
