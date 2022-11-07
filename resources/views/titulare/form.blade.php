<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('docente_id') }}
            {{ Form::select('docente_id',$docente, $titulare->docente_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : ''), 'placeholder' => 'Docente Id']) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TipoDocente') }}
            {{ Form::select('TipoDocente',$tipo, $titulare->TipoDocente, ['class' => 'form-control' . ($errors->has('TipoDocente') ? ' is-invalid' : ''), 'placeholder' => 'Tipodocente']) }}
            {!! $errors->first('TipoDocente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Convocatori') }}
            {{ Form::text('Convocatori', $titulare->Convocatori, ['class' => 'form-control' . ($errors->has('Convocatori') ? ' is-invalid' : ''), 'placeholder' => 'Convocatori']) }}
            {!! $errors->first('Convocatori', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>