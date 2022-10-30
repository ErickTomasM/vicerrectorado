<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Ambiente') }}
            {{ Form::text('Ambiente', $infraestructura->Ambiente, ['class' => 'form-control' . ($errors->has('Ambiente') ? ' is-invalid' : ''), 'placeholder' => 'Ambiente']) }}
            {!! $errors->first('Ambiente', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Piso') }}
            {{ Form::text('Piso', $infraestructura->Piso, ['class' => 'form-control' . ($errors->has('Piso') ? ' is-invalid' : ''), 'placeholder' => 'Piso']) }}
            {!! $errors->first('Piso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $infraestructura->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Capacidad') }}
            {{ Form::text('Capacidad', $infraestructura->Capacidad, ['class' => 'form-control' . ($errors->has('Capacidad') ? ' is-invalid' : ''), 'placeholder' => 'Capacidad']) }}
            {!! $errors->first('Capacidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Equipamiento') }}
            {{ Form::text('Equipamiento', $infraestructura->Equipamiento, ['class' => 'form-control' . ($errors->has('Equipamiento') ? ' is-invalid' : ''), 'placeholder' => 'Equipamiento']) }}
            {!! $errors->first('Equipamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ubicacion') }}
            {{ Form::text('Ubicacion', $infraestructura->Ubicacion, ['class' => 'form-control' . ($errors->has('Ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
            {!! $errors->first('Ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>