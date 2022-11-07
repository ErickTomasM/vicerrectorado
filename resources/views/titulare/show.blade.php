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
                            <strong>Tipodocente:</strong>
                            {{ $titulare->TipoDocente }}
                        </div>
                        <div class="form-group">
                            <strong>Convocatori:</strong>
                            {{ $titulare->Convocatori }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
