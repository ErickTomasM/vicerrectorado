<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('horario_id') }}
            {{ Form::text('horario_id', $designacion->horario_id, ['class' => 'form-control' . ($errors->has('horario_id') ? ' is-invalid' : ''), 'placeholder' => 'Horario Id']) }}
            {!! $errors->first('horario_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Seleccione un Docente') }}
            {{ Form::select('docente_id',$docentes, $designacion->docente_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un Docente']) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudio_id') }}
            {{ Form::text('estudio_id', $designacion->estudio_id, ['class' => 'form-control' . ($errors->has('estudio_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudio Id']) }}
            {!! $errors->first('estudio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Resolucion') }}
            {{ Form::text('Resolucion', $designacion->Resolucion, ['class' => 'form-control' . ($errors->has('Resolucion') ? ' is-invalid' : ''), 'placeholder' => 'Resolucion']) }}
            {!! $errors->first('Resolucion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dictamen') }}
            {{ Form::text('Dictamen', $designacion->Dictamen, ['class' => 'form-control' . ($errors->has('Dictamen') ? ' is-invalid' : ''), 'placeholder' => 'Dictamen']) }}
            {!! $errors->first('Dictamen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumeroCarta') }}
            {{ Form::text('NumeroCarta', $designacion->NumeroCarta, ['class' => 'form-control' . ($errors->has('NumeroCarta') ? ' is-invalid' : ''), 'placeholder' => 'Numerocarta']) }}
            {!! $errors->first('NumeroCarta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Facultad') }}
            {{ Form::text('Facultad', $designacion->Facultad, ['class' => 'form-control' . ($errors->has('Facultad') ? ' is-invalid' : ''), 'placeholder' => 'Facultad']) }}
            {!! $errors->first('Facultad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Carrera') }}
            {{ Form::text('Carrera', $designacion->Carrera, ['class' => 'form-control' . ($errors->has('Carrera') ? ' is-invalid' : ''), 'placeholder' => 'Carrera']) }}
            {!! $errors->first('Carrera', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TipoDocente') }}
            {{ Form::text('TipoDocente', $designacion->TipoDocente, ['class' => 'form-control' . ($errors->has('TipoDocente') ? ' is-invalid' : ''), 'placeholder' => 'Tipodocente']) }}
            {!! $errors->first('TipoDocente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Gestion') }}
            {{ Form::text('Gestion', $designacion->Gestion, ['class' => 'form-control' . ($errors->has('Gestion') ? ' is-invalid' : ''), 'placeholder' => 'Gestion']) }}
            {!! $errors->first('Gestion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Semestre') }}
            {{ Form::text('Semestre', $designacion->Semestre, ['class' => 'form-control' . ($errors->has('Semestre') ? ' is-invalid' : ''), 'placeholder' => 'Semestre']) }}
            {!! $errors->first('Semestre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Convocatoria') }}
            {{ Form::text('Convocatoria', $designacion->Convocatoria, ['class' => 'form-control' . ($errors->has('Convocatoria') ? ' is-invalid' : ''), 'placeholder' => 'Convocatoria']) }}
            {!! $errors->first('Convocatoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaDesignacion') }}
            {{ Form::date('FechaDesignacion', $designacion->FechaDesignacion, ['class' => 'form-control' . ($errors->has('FechaDesignacion') ? ' is-invalid' : ''), 'placeholder' => 'Fechadesignacion']) }}
            {!! $errors->first('FechaDesignacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>