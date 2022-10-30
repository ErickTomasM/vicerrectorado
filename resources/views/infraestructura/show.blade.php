@extends('layouts.app')

@section('template_title')
    {{ $infraestructura->name ?? 'Show Infraestructura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Mostrar Infraestructura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('infraestructuras.index') }}"> Atras</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Ambiente:</strong>
                            {{ $infraestructura->Ambiente }}
                        </div>
                        <div class="form-group">
                            <strong>Piso:</strong>
                            {{ $infraestructura->Piso }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $infraestructura->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad:</strong>
                            {{ $infraestructura->Capacidad }}
                        </div>
                        <div class="form-group">
                            <strong>Equipamiento:</strong>
                            {{ $infraestructura->Equipamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Ubicacion:</strong>
                            {{ $infraestructura->Ubicacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
