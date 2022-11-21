<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('docente_id') }}
            {{ Form::text('docente_id', $extraordinario->docente_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : ''), 'placeholder' => 'Docente Id']) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('designacion_id') }}
            {{ Form::text('designacion_id', $extraordinario->designacion_id, ['class' => 'form-control' . ($errors->has('designacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Designacion Id']) }}
            {!! $errors->first('designacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudio_id') }}
            {{ Form::text('estudio_id', $extraordinario->estudio_id, ['class' => 'form-control' . ($errors->has('estudio_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudio Id']) }}
            {!! $errors->first('estudio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudio1') }}
            {{ Form::text('estudio1', $extraordinario->estudio1, ['class' => 'form-control' . ($errors->has('estudio1') ? ' is-invalid' : ''), 'placeholder' => 'Estudio1']) }}
            {!! $errors->first('estudio1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudio2') }}
            {{ Form::text('estudio2', $extraordinario->estudio2, ['class' => 'form-control' . ($errors->has('estudio2') ? ' is-invalid' : ''), 'placeholder' => 'Estudio2']) }}
            {!! $errors->first('estudio2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudio3') }}
            {{ Form::text('estudio3', $extraordinario->estudio3, ['class' => 'form-control' . ($errors->has('estudio3') ? ' is-invalid' : ''), 'placeholder' => 'Estudio3']) }}
            {!! $errors->first('estudio3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudio4') }}
            {{ Form::text('estudio4', $extraordinario->estudio4, ['class' => 'form-control' . ($errors->has('estudio4') ? ' is-invalid' : ''), 'placeholder' => 'Estudio4']) }}
            {!! $errors->first('estudio4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudio5') }}
            {{ Form::text('estudio5', $extraordinario->estudio5, ['class' => 'form-control' . ($errors->has('estudio5') ? ' is-invalid' : ''), 'placeholder' => 'Estudio5']) }}
            {!! $errors->first('estudio5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TiposDocente') }}
            {{ Form::text('TiposDocente', $extraordinario->TiposDocente, ['class' => 'form-control' . ($errors->has('TiposDocente') ? ' is-invalid' : ''), 'placeholder' => 'Tiposdocente']) }}
            {!! $errors->first('TiposDocente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dedicacion') }}
            {{ Form::text('Dedicacion', $extraordinario->Dedicacion, ['class' => 'form-control' . ($errors->has('Dedicacion') ? ' is-invalid' : ''), 'placeholder' => 'Dedicacion']) }}
            {!! $errors->first('Dedicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Convocatoria') }}
            {{ Form::text('Convocatoria', $extraordinario->Convocatoria, ['class' => 'form-control' . ($errors->has('Convocatoria') ? ' is-invalid' : ''), 'placeholder' => 'Convocatoria']) }}
            {!! $errors->first('Convocatoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>