@extends('layouts.app')

@section('template_title')
    {{ $docente->name ?? 'Show Docente' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Docente</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('docentes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombres:</strong>
                            {{ $docente->Nombres }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidopaterno:</strong>
                            {{ $docente->ApellidoPaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Apellidomaterno:</strong>
                            {{ $docente->ApellidoMaterno }}
                        </div>
                        <div class="form-group">
                            <strong>Ci:</strong>
                            {{ $docente->ci }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $docente->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Cargo:</strong>
                            {{ $docente->Cargo }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $docente->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Genero:</strong>
                            {{ $docente->Genero }}
                        </div>
                        <div class="form-group">
                            <strong>Nacionalidad:</strong>
                            {{ $docente->Nacionalidad }}
                        </div>
                        <div class="form-group">
                            <strong>Estadocivil:</strong>
                            {{ $docente->EstadoCivil }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $docente->FechaNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Correoelectronico:</strong>
                            {{ $docente->CorreoElectronico }}
                        </div>
                        <div class="form-group">
                            <strong>Titulo:</strong>
                            {{ $docente->Titulo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
