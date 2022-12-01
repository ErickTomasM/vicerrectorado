<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Seleccione un docente') }}
            {{ Form::select('docente_id',$docente, $extraordinario->docente_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un Docente']) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Designacion') }}
            {{ Form::select('designacion_id',$designacion, $extraordinario->designacion_id, ['class' => 'form-control' . ($errors->has('designacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Por medio del Dictamen']) }}
            {!! $errors->first('designacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('estudio_id',$estudio, $extraordinario->estudio_id, ['class' => 'form-control' . ($errors->has('estudio_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('estudio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('estudio1',$estudio, $extraordinario->estudio1, ['class' => 'form-control' . ($errors->has('estudio1') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('estudio1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('estudio2',$estudio, $extraordinario->estudio2, ['class' => 'form-control' . ($errors->has('estudio2') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('estudio2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('estudio3',$estudio, $extraordinario->estudio3, ['class' => 'form-control' . ($errors->has('estudio3') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('estudio3', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('estudio4',$estudio, $extraordinario->estudio4, ['class' => 'form-control' . ($errors->has('estudio4') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('estudio4', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('estudio5',$estudio, $extraordinario->estudio5, ['class' => 'form-control' . ($errors->has('estudio5') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('estudio5', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Docente') }}
            {{ Form::select('TiposDocente',$tipo, $extraordinario->TiposDocente, ['class' => 'form-control' . ($errors->has('TiposDocente') ? ' is-invalid' : ''), 'placeholder' => 'Seccione el tipo de docente']) }}
            {!! $errors->first('TiposDocente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('A Tiempo:') }}
            {{ Form::select('Dedicacion',$dedicacion, $extraordinario->Dedicacion, ['class' => 'form-control' . ($errors->has('Dedicacion') ? ' is-invalid' : ''), 'placeholder' => 'A tiempo']) }}
            {!! $errors->first('Dedicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Convocatoria') }}
            {{ Form::select('Convocatoria',$convocatoria, $extraordinario->Convocatoria, ['class' => 'form-control' . ($errors->has('Convocatoria') ? ' is-invalid' : ''), 'placeholder' => 'Mediante que Convocatoria']) }}
            {!! $errors->first('Convocatoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>