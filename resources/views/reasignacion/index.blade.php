
@extends('adminlte::page')
@section('template_title')
    Reasignacion
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Reasignacion') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('reasignacions.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Designacion Id</th>
										<th>Fechareasignacion</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($reasignacions as $reasignacion)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $reasignacion->designacion_id }}</td>
											<td>{{ $reasignacion->FechaReasignacion }}</td>

                                            <td>
                                                <form action="{{ route('reasignacions.destroy',$reasignacion->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('reasignacions.show',$reasignacion->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('reasignacions.edit',$reasignacion->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                {!! $reasignacions->links() !!}
            </div>
        </div>
    </div>
@endsection
