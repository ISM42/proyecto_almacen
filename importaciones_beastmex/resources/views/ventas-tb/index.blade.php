@extends('layouts.app')

@section('template_title')
    Ventas Tb
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ventas Tb') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ventas-tbs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Venta Id</th>
										<th>Producto Id</th>
										<th>Cantidad</th>
										<th>Precio Venta</th>
										<th>Fecha</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ventasTbs as $ventasTb)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ventasTb->venta_id }}</td>
											<td>{{ $ventasTb->producto_id }}</td>
											<td>{{ $ventasTb->cantidad }}</td>
											<td>{{ $ventasTb->precio_venta }}</td>
											<td>{{ $ventasTb->fecha }}</td>

                                            <td>
                                                <form action="{{ route('ventas-tbs.destroy',$ventasTb->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ventas-tbs.show',$ventasTb->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ventas-tbs.edit',$ventasTb->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $ventasTbs->links() !!}
            </div>
        </div>
    </div>
@endsection
