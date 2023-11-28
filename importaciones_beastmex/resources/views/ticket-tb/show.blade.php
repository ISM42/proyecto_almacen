@extends('layouts.app')

@section('template_title')
    {{ $ticketTb->name ?? "{{ __('Show') Ticket Tb" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ticket Tb</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ticket-tb.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Persona Id:</strong>
                            {{ $ticketTb->persona_id }}
                        </div>
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $ticketTb->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Venta Id:</strong>
                            {{ $ticketTb->venta_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
