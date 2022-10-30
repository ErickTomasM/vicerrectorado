@extends('layouts.app')

@section('template_title')
    {{ $estudio->name ?? 'Show Estudio' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"> Plan de Estudios</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('estudios.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Sigla:</strong>
                            {{ $estudio->Sigla }}
                        </div>
                        <div class="form-group">
                            <strong>Materia:</strong>
                            {{ $estudio->Materia }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
