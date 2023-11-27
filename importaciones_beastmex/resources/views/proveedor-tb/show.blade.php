@extends('layouts.app')

@section('template_title')
    {{ $proveedorTb->name ?? "{{ __('Show') Proveedor Tb" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Proveedor Tb</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('proveedor-tb.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $proveedorTb->persona_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Empresa:</strong>
                            {{ $proveedorTb->nombre_empresa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
