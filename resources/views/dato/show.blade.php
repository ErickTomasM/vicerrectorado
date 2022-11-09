@extends('layouts.app')

@section('template_title')
    {{ $dato->name ?? 'Show Dato' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Dato</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('datos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $dato->Tipo }}
                        </div>
                        <div class="form-group">
                            <strong>Tiempo:</strong>
                            {{ $dato->Tiempo }}
                        </div>
                        <div class="form-group">
                            <strong>Dato01:</strong>
                            {{ $dato->Dato01 }}
                        </div>
                        <div class="form-group">
                            <strong>Dato02:</strong>
                            {{ $dato->Dato02 }}
                        </div>
                        <div class="form-group">
                            <strong>Dato03:</strong>
                            {{ $dato->Dato03 }}
                        </div>
                        <div class="form-group">
                            <strong>Dato04:</strong>
                            {{ $dato->Dato04 }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
