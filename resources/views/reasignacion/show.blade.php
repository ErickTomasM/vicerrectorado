@extends('layouts.app')

@section('template_title')
    {{ $reasignacion->name ?? 'Show Reasignacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Reasignacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('reasignacions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Designacion Id:</strong>
                            {{ $reasignacion->designacion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fechareasignacion:</strong>
                            {{ $reasignacion->FechaReasignacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
