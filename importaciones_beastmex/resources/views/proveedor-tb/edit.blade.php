@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Proveedor Tb
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Proveedor Tb</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('proveedor-tbs.update', $proveedorTb->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('proveedor-tb.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
