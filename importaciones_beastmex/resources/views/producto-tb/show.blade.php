@extends('layouts.app')

@section('template_title')
    {{ $productoTb->name ?? "{{ __('Show') Producto Tb" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Producto Tb</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('producto-tbs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Proveedor Id:</strong>
                            {{ $productoTb->proveedor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Producto:</strong>
                            {{ $productoTb->nombre_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Num Serie:</strong>
                            {{ $productoTb->num_serie }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $productoTb->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $productoTb->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Costo Compra:</strong>
                            {{ $productoTb->costo_compra }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Ingreso:</strong>
                            {{ $productoTb->fecha_ingreso }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
