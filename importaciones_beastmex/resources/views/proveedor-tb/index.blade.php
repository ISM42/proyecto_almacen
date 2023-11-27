@extends('layouts.app')

@section('template_title')
    Proveedor Tb
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Proveedor Tb') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('proveedor-tbs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Persona Id</th>
										<th>Nombre Empresa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($proveedorTbs as $proveedorTb)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $proveedorTb->persona_id }}</td>
											<td>{{ $proveedorTb->nombre_empresa }}</td>

                                            <td>
                                                <form action="{{ route('proveedor-tb.destroy',$proveedorTb->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('proveedor-tb.show',$proveedorTb->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('proveedor-tb.edit',$proveedorTb->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $proveedorTbs->links() !!}
            </div>
        </div>
    </div>
@endsection
