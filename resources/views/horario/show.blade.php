@extends('layouts.app')

@section('template_title')
    {{ $horario->name ?? 'Show Horario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Horario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('horarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Docente Id:</strong>
                            {{ $horario->docente_id }}
                        </div>
                        <div class="form-group">
                            <strong>Infraestructura Id:</strong>
                            {{ $horario->infraestructura_id }}
                        </div>
                        <div class="form-group">
                            <strong>Dia:</strong>
                            {{ $horario->Dia }}
                        </div>
                        <div class="form-group">
                            <strong>Turno:</strong>
                            {{ $horario->Turno }}
                        </div>
                        <div class="form-group">
                            <strong>Hora:</strong>
                            {{ $horario->Hora }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
