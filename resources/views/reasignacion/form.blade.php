<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('designacion_id') }}
            {{ Form::text('designacion_id', $reasignacion->designacion_id, ['class' => 'form-control' . ($errors->has('designacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Designacion Id']) }}
            {!! $errors->first('designacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaReasignacion') }}
            {{ Form::text('FechaReasignacion', $reasignacion->FechaReasignacion, ['class' => 'form-control' . ($errors->has('FechaReasignacion') ? ' is-invalid' : ''), 'placeholder' => 'Fechareasignacion']) }}
            {!! $errors->first('FechaReasignacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>