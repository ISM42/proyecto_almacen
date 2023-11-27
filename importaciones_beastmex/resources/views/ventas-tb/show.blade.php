@extends('layouts.app')

@section('template_title')
    {{ $ventasTb->name ?? "{{ __('Show') Ventas Tb" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ventas Tb</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ventas-tbs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Venta Id:</strong>
                            {{ $ventasTb->venta_id }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $ventasTb->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $ventasTb->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Precio Venta:</strong>
                            {{ $ventasTb->precio_venta }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $ventasTb->fecha }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
