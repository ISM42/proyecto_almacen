<div class="box box-info padding-1">
    <div class="box-body">
        
    <div class="form-group">
    {{ Form::label('id', 'Persona ID') }}
    {{ Form::text('id', null, ['class' => 'form-control' . ($errors->has('id') ? ' is-invalid' : ''), 'placeholder' => 'Persona ID']) }}
    {!! $errors->first('id', '<div class="invalid-feedback">:message</div>') !!}
</div>

       
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $personasTb->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_p') }}
            {{ Form::text('apellido_p', $personasTb->apellido_p, ['class' => 'form-control' . ($errors->has('apellido_p') ? ' is-invalid' : ''), 'placeholder' => 'Apellido P']) }}
            {!! $errors->first('apellido_p', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido_m') }}
            {{ Form::text('apellido_m', $personasTb->apellido_m, ['class' => 'form-control' . ($errors->has('apellido_m') ? ' is-invalid' : ''), 'placeholder' => 'Apellido M']) }}
            {!! $errors->first('apellido_m', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('correo') }}
            {{ Form::text('correo', $personasTb->correo, ['class' => 'form-control' . ($errors->has('correo') ? ' is-invalid' : ''), 'placeholder' => 'Correo']) }}
            {!! $errors->first('correo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $personasTb->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>

    </div>
</div>
