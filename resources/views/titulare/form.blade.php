<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('docente_id') }}
            {{ Form::text('docente_id', $titulare->docente_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : ''), 'placeholder' => 'Docente Id']) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('designacion_id') }}
            {{ Form::text('designacion_id', $titulare->designacion_id, ['class' => 'form-control' . ($errors->has('designacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Designacion Id']) }}
            {!! $errors->first('designacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudio_id') }}
            {{ Form::text('estudio_id', $titulare->estudio_id, ['class' => 'form-control' . ($errors->has('estudio_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudio Id']) }}
            {!! $errors->first('estudio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materia01') }}
            {{ Form::text('materia01', $titulare->materia01, ['class' => 'form-control' . ($errors->has('materia01') ? ' is-invalid' : ''), 'placeholder' => 'Materia01']) }}
            {!! $errors->first('materia01', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materia02') }}
            {{ Form::text('materia02', $titulare->materia02, ['class' => 'form-control' . ($errors->has('materia02') ? ' is-invalid' : ''), 'placeholder' => 'Materia02']) }}
            {!! $errors->first('materia02', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materia03') }}
            {{ Form::text('materia03', $titulare->materia03, ['class' => 'form-control' . ($errors->has('materia03') ? ' is-invalid' : ''), 'placeholder' => 'Materia03']) }}
            {!! $errors->first('materia03', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materia04') }}
            {{ Form::text('materia04', $titulare->materia04, ['class' => 'form-control' . ($errors->has('materia04') ? ' is-invalid' : ''), 'placeholder' => 'Materia04']) }}
            {!! $errors->first('materia04', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materia05') }}
            {{ Form::text('materia05', $titulare->materia05, ['class' => 'form-control' . ($errors->has('materia05') ? ' is-invalid' : ''), 'placeholder' => 'Materia05']) }}
            {!! $errors->first('materia05', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TiposDocente') }}
            {{ Form::text('TiposDocente', $titulare->TiposDocente, ['class' => 'form-control' . ($errors->has('TiposDocente') ? ' is-invalid' : ''), 'placeholder' => 'Tiposdocente']) }}
            {!! $errors->first('TiposDocente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dedicacion') }}
            {{ Form::text('Dedicacion', $titulare->Dedicacion, ['class' => 'form-control' . ($errors->has('Dedicacion') ? ' is-invalid' : ''), 'placeholder' => 'Dedicacion']) }}
            {!! $errors->first('Dedicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>