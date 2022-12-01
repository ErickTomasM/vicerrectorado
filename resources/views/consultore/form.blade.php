<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('docente_id') }}
            {{ Form::text('docente_id', $consultore->docente_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : ''), 'placeholder' => 'Docente Id']) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('designacion_id') }}
            {{ Form::text('designacion_id', $consultore->designacion_id, ['class' => 'form-control' . ($errors->has('designacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Designacion Id']) }}
            {!! $errors->first('designacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudio_id') }}
            {{ Form::select('estudio_id',$plan, $consultore->estudio_id, ['class' => 'form-control' . ($errors->has('estudio_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudio Id']) }}
            {!! $errors->first('estudio_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materiaC01') }}
            {{ Form::select('materiaC01',$plan, $consultore->materiaC01, ['class' => 'form-control' . ($errors->has('materiaC01') ? ' is-invalid' : ''), 'placeholder' => 'Materiac01']) }}
            {!! $errors->first('materiaC01', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materiaC02') }}
            {{ Form::select('materiaC02',$plan, $consultore->materiaC02, ['class' => 'form-control' . ($errors->has('materiaC02') ? ' is-invalid' : ''), 'placeholder' => 'Materiac02']) }}
            {!! $errors->first('materiaC02', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materiaC03') }}
            {{ Form::select('materiaC03',$plan, $consultore->materiaC03, ['class' => 'form-control' . ($errors->has('materiaC03') ? ' is-invalid' : ''), 'placeholder' => 'Materiac03']) }}
            {!! $errors->first('materiaC03', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materiaC04') }}
            {{ Form::text('materiaC04', $consultore->materiaC04, ['class' => 'form-control' . ($errors->has('materiaC04') ? ' is-invalid' : ''), 'placeholder' => 'Materiac04']) }}
            {!! $errors->first('materiaC04', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materiaC05') }}
            {{ Form::text('materiaC05', $consultore->materiaC05, ['class' => 'form-control' . ($errors->has('materiaC05') ? ' is-invalid' : ''), 'placeholder' => 'Materiac05']) }}
            {!! $errors->first('materiaC05', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            f
            {{ Form::label('Dedicacion') }}
            {{ Form::select('Dedicacion', $dedicacion,$consultore->Dedicacion, ['class' => 'form-control' . ($errors->has('Dedicacion') ? ' is-invalid' : ''), 'placeholder' => 'Dedicacion']) }}
            {!! $errors->first('Dedicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contrato') }}
            {{ Form::file('contrato', $consultore->contrato, ['id'=>'contrato','name'=>'contrato','class' => 'form-control' . ($errors->has('contrato') ? ' is-invalid' : ''), 'placeholder' => 'Contrato']) }}
            {!! $errors->first('contrato', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>