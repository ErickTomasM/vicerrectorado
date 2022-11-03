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
        <div class="form-group">
            {{ Form::label('Horast') }}
            {{ Form::text('Horast', $estudio->Horast, ['class' => 'form-control' . ($errors->has('Horast') ? ' is-invalid' : ''), 'placeholder' => 'Horast']) }}
            {!! $errors->first('Horast', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Horasp') }}
            {{ Form::text('Horasp', $estudio->Horasp, ['class' => 'form-control' . ($errors->has('Horasp') ? ' is-invalid' : ''), 'placeholder' => 'Horasp']) }}
            {!! $errors->first('Horasp', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>