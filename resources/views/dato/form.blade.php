<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('Tipo', $dato->Tipo, ['class' => 'form-control' . ($errors->has('Tipo') ? ' is-invalid' : ''), 'placeholder' => 'Tipo']) }}
            {!! $errors->first('Tipo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tiempo') }}
            {{ Form::text('Tiempo', $dato->Tiempo, ['class' => 'form-control' . ($errors->has('Tiempo') ? ' is-invalid' : ''), 'placeholder' => 'Tiempo']) }}
            {!! $errors->first('Tiempo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dato01') }}
            {{ Form::text('Dato01', $dato->Dato01, ['class' => 'form-control' . ($errors->has('Dato01') ? ' is-invalid' : ''), 'placeholder' => 'Dato01']) }}
            {!! $errors->first('Dato01', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dato02') }}
            {{ Form::text('Dato02', $dato->Dato02, ['class' => 'form-control' . ($errors->has('Dato02') ? ' is-invalid' : ''), 'placeholder' => 'Dato02']) }}
            {!! $errors->first('Dato02', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dato03') }}
            {{ Form::text('Dato03', $dato->Dato03, ['class' => 'form-control' . ($errors->has('Dato03') ? ' is-invalid' : ''), 'placeholder' => 'Dato03']) }}
            {!! $errors->first('Dato03', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dato04') }}
            {{ Form::text('Dato04', $dato->Dato04, ['class' => 'form-control' . ($errors->has('Dato04') ? ' is-invalid' : ''), 'placeholder' => 'Dato04']) }}
            {!! $errors->first('Dato04', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>