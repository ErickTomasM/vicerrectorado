@extends('layouts.app')

@section('template_title')
    {{ $consultore->name ?? 'Show Consultore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Consultore</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('consultores.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Docente Id:</strong>
                            {{ $consultore->docente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Designacion Id:</strong>
                            {{ $consultore->designacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estudio Id:</strong>
                            {{ $consultore->estudio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Materiac01:</strong>
                            {{ $consultore->materiaC01 }}
                        </div>
                        <div class="form-group">
                            <strong>Materiac02:</strong>
                            {{ $consultore->materiaC02 }}
                        </div>
                        <div class="form-group">
                            <strong>Materiac03:</strong>
                            {{ $consultore->materiaC03 }}
                        </div>
                        <div class="form-group">
                            <strong>Materiac04:</strong>
                            {{ $consultore->materiaC04 }}
                        </div>
                        <div class="form-group">
                            <strong>Materiac05:</strong>
                            {{ $consultore->materiaC05 }}
                        </div>
                        <div class="form-group">
                            <strong>Dedicacion:</strong>
                            {{ $consultore->Dedicacion }}
                        </div>
                        <div class="form-group">
                            <strong>Contrato:</strong>
                            {{ $consultore->contrato }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
