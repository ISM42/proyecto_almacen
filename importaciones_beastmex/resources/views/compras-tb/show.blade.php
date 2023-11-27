@extends('layouts.app')

@section('template_title')
    {{ $comprasTb->name ?? "{{ __('Show') Compras Tb" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Compras Tb</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('compras-tbs.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Proveedor Id:</strong>
                            {{ $comprasTb->proveedor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $comprasTb->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $comprasTb->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
