@extends('layouts.app')

@section('template_title')
    {{ $extraordinario->name ?? 'Show Extraordinario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Extraordinario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('extraordinarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Docente Id:</strong>
                            {{ $extraordinario->docente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Designacion Id:</strong>
                            {{ $extraordinario->designacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estudio Id:</strong>
                            {{ $extraordinario->estudio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Tiposdocente:</strong>
                            {{ $extraordinario->TiposDocente }}
                        </div>
                        <div class="form-group">
                            <strong>Dedicacion:</strong>
                            {{ $extraordinario->Dedicacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
