@extends('layouts.app')

@section('template_title')
    {{ $personasTb->name ?? "{{ __('Show') Personas Tb" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Personas Tb</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('personas-tb.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>User Id:</strong>
                            {{ $personasTb->user_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $personasTb->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido P:</strong>
                            {{ $personasTb->apellido_p }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido M:</strong>
                            {{ $personasTb->apellido_m }}
                        </div>
                        <div class="form-group">
                            <strong>Correo:</strong>
                            {{ $personasTb->correo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $personasTb->telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
