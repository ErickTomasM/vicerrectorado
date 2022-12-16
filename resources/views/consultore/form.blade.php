<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('docente_id') }}
            {{ Form::select('docente_id', $docente, $consultore->docente_id, ['class' => 'form-control' . ($errors->has('docente_id') ? ' is-invalid' : ''), 'placeholder' => 'Docente Id']) }}
            {!! $errors->first('docente_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('designacion_id') }}
            {{ Form::select('designacion_id',$designacion, $consultore->designacion_id, ['class' => 'form-control' . ($errors->has('designacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Segun el dictamen']) }}
            {!! $errors->first('designacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudio_id') }}
            {{ Form::select('estudio_id', $plan ,$consultore->estudio_id, ['class' => 'form-control' . ($errors->has('estudio_id') ? ' is-invalid' : ''), 'placeholder' => 'Estudio Id']) }}
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
            {{ Form::select('materiaC04',$plan, $consultore->materiaC04, ['class' => 'form-control' . ($errors->has('materiaC04') ? ' is-invalid' : ''), 'placeholder' => 'Materiac04']) }}
            {!! $errors->first('materiaC04', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('materiaC05') }}
            {{ Form::select('materiaC05',$plan, $consultore->materiaC05, ['class' => 'form-control' . ($errors->has('materiaC05') ? ' is-invalid' : ''), 'placeholder' => 'Materiac05']) }}
            {!! $errors->first('materiaC05', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Dedicacion') }}
            {{ Form::select('Dedicacion',$dedicacion, $consultore->Dedicacion, ['class' => 'form-control' . ($errors->has('Dedicacion') ? ' is-invalid' : ''), 'placeholder' => 'Dedicacion']) }}
            {!! $errors->first('Dedicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('contrato') }}
            
            <input type="file"  name="contrato" id="contrato">
            
        </div>

    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-danger" value="{{$consultore->contrato}}">Submit</button>
    </div>
</div>