<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Sigla') }}
            {{ Form::text('Sigla', $estudio->Sigla, ['class' => 'form-control' . ($errors->has('Sigla') ? ' is-invalid' : ''), 'placeholder' => 'Sigla']) }}
            {!! $errors->first('Sigla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Materia') }}
            {{ Form::text('Materia', $estudio->Materia, ['class' => 'form-control' . ($errors->has('Materia') ? ' is-invalid' : ''), 'placeholder' => 'Materia']) }}
            {!! $errors->first('Materia', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>