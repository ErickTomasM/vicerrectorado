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
                            <strong>Estudio1:</strong>
                            {{ $extraordinario->estudio1 }}
                        </div>
                        <div class="form-group">
                            <strong>Estudio2:</strong>
                            {{ $extraordinario->estudio2 }}
                        </div>
                        <div class="form-group">
                            <strong>Estudio3:</strong>
                            {{ $extraordinario->estudio3 }}
                        </div>
                        <div class="form-group">
                            <strong>Estudio4:</strong>
                            {{ $extraordinario->estudio4 }}
                        </div>
                        <div class="form-group">
                            <strong>Estudio5:</strong>
                            {{ $extraordinario->estudio5 }}
                        </div>
                        <div class="form-group">
                            <strong>Tiposdocente:</strong>
                            {{ $extraordinario->TiposDocente }}
                        </div>
                        <div class="form-group">
                            <strong>Dedicacion:</strong>
                            {{ $extraordinario->Dedicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Convocatoria:</strong>
                            {{ $extraordinario->Convocatoria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
