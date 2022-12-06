<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
           
            {{ Form::label('Docente') }}
            {{ Form::select('docente_id', $docente, $titulare->docente_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un Docente']) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Designacion') }}
            {{ Form::select('designacion_id',$designacion, $titulare->designacion_id, ['class' => 'form-control' . ($errors->has('designacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Mediante el Dictamen']) }}
            {!! $errors->first('designacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('estudio_id',$estudio, $titulare->estudio_id, ['class' => 'form-control' . ($errors->has('estudio_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('estudio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('materia01',$estudio, $titulare->materia01, ['class' => 'form-control' . ($errors->has('materia01') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('materia01', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('materia02',$estudio, $titulare->materia02, ['class' => 'form-control' . ($errors->has('materia02') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('materia02', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('materia03',$estudio, $titulare->materia03, ['class' => 'form-control' . ($errors->has('materia03') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('materia03', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('materia04',$estudio, $titulare->materia04, ['class' => 'form-control' . ($errors->has('materia04') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('materia04', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Plan de estudios') }}
            {{ Form::select('materia05',$estudio, $titulare->materia05, ['class' => 'form-control' . ($errors->has('materia05') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione una Materia']) }}
            {!! $errors->first('materia05', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo de Docente') }}
            {{ Form::select('TiposDocente',$tipo, $titulare->TiposDocente, ['class' => 'form-control' . ($errors->has('TiposDocente') ? ' is-invalid' : ''), 'placeholder' => 'Tiposdocente']) }}
            {!! $errors->first('TiposDocente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('A tiempo:') }}
            {{ Form::select('Dedicacion',$dedicacion, $titulare->Dedicacion, ['class' => 'form-control' . ($errors->has('Dedicacion') ? ' is-invalid' : ''), 'placeholder' => 'Dedicacion']) }}
            {!! $errors->first('Dedicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>