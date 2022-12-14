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
                            <span class="card-title">Show Designacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('designacions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Fechadesignacion:</strong>
                            {{ $designacion->FechaDesignacion }}
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
                            <strong>Carrera:</strong>
                            {{ $designacion->Carrera }}
                        </div>
                        <div class="form-group">
                            <strong>Gestion:</strong>
                            {{ $designacion->Gestion }}
                        </div>
                        <div class="form-group">
                            <strong>Semestre:</strong>
                            {{ $designacion->Semestre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
