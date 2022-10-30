@extends('layouts.app')

@section('template_title')
    {{ $designacion->name ?? 'Show Designacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Designaciones</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('designacions.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Horario Id:</strong>
                            {{ $designacion->horario_id }}
                        </div>
                        <div class="form-group">
                            <strong>Docente Id:</strong>
                            {{ $designacion->docente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estudio Id:</strong>
                            {{ $designacion->estudio_id }}
                        </div>
                        <div class="form-group">
                            <strong>Resolucion:</strong>
                            {{ $designacion->Resolucion }}
                        </div>
                        <div class="form-group">
                            <strong>Dictamen:</strong>
                            {{ $designacion->Dictamen }}
                        </div>
                        <div class="form-group">
                            <strong>Numerocarta:</strong>
                            {{ $designacion->NumeroCarta }}
                        </div>
                        <div class="form-group">
                            <strong>Facultad:</strong>
                            {{ $designacion->Facultad }}
                        </div>
                        <div class="form-group">
                            <strong>Tipodocente:</strong>
                            {{ $designacion->TipoDocente }}
                        </div>
                        <div class="form-group">
                            <strong>Gestion:</strong>
                            {{ $designacion->Gestion }}
                        </div>
                        <div class="form-group">
                            <strong>Convocatoria:</strong>
                            {{ $designacion->Convocatoria }}
                        </div>
                        <div class="form-group">
                            <strong>Fechadesignacion:</strong>
                            {{ $designacion->FechaDesignacion }}
                        </div>
                        <div class="form-group">
                            <strong>Asignaturas:</strong>
                            {{ $designacion->Asignaturas }}
                        </div>
                        <div class="form-group">
                            <strong>Cargahoraria:</strong>
                            {{ $designacion->CargaHoraria }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
