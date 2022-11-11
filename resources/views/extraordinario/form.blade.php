<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('docente_id') }}
            {{ Form::select('docente_id',$z, $extraordinario->docente_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : ''), 'placeholder' => 'Docente Id']) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('TiposDocente') }}
            {{ Form::select('TiposDocente',$x, $extraordinario->TiposDocente, ['class' => 'form-control' . ($errors->has('TiposDocente') ? ' is-invalid' : ''), 'placeholder' => 'Tiposdocente']) }}
            {!! $errors->first('TiposDocente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Convocatoria') }}
            {{ Form::select('Convocatoria',$y, $extraordinario->Convocatoria, ['class' => 'form-control' . ($errors->has('Convocatoria') ? ' is-invalid' : ''), 'placeholder' => 'Convocatoria']) }}
            {!! $errors->first('Convocatoria', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>