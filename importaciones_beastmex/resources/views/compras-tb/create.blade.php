@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Compras Tb
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Create') }} Compras Tb</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('compras-tbs.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('compras-tb.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
