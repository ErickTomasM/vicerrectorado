@extends('layouts.app')

@section('template_title')
    {{ $titulare->name ?? 'Show Titulare' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Titulare</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('titulares.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Docente Id:</strong>
                            {{ $titulare->docente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Designacion Id:</strong>
                            {{ $titulare->designacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estudio Id:</strong>
                            {{ $titulare->estudio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Materia01:</strong>
                            {{ $titulare->materia01 }}
                        </div>
                        <div class="form-group">
                            <strong>Materia02:</strong>
                            {{ $titulare->materia02 }}
                        </div>
                        <div class="form-group">
                            <strong>Materia03:</strong>
                            {{ $titulare->materia03 }}
                        </div>
                        <div class="form-group">
                            <strong>Materia04:</strong>
                            {{ $titulare->materia04 }}
                        </div>
                        <div class="form-group">
                            <strong>Materia05:</strong>
                            {{ $titulare->materia05 }}
                        </div>
                        <div class="form-group">
                            <strong>Tiposdocente:</strong>
                            {{ $titulare->TiposDocente }}
                        </div>
                        <div class="form-group">
                            <strong>Dedicacion:</strong>
                            {{ $titulare->Dedicacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
