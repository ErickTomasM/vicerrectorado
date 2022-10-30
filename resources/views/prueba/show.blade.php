@extends('layouts.app')

@section('template_title')
    {{ $prueba->name ?? 'Show Prueba' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Prueba</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pruebas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $prueba->Nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $prueba->ApellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $prueba->ApellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $prueba->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $prueba->Telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
