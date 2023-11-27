@extends('layouts.app')

@section('template_title')
    Producto Tb
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Producto Tb') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('producto-tbs.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Proveedor Id</th>
										<th>Nombre Producto</th>
										<th>Num Serie</th>
										<th>Marca</th>
										<th>Cantidad</th>
										<th>Costo Compra</th>
										<th>Fecha Ingreso</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($productoTbs as $productoTb)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $productoTb->proveedor_id }}</td>
											<td>{{ $productoTb->nombre_producto }}</td>
											<td>{{ $productoTb->num_serie }}</td>
											<td>{{ $productoTb->marca }}</td>
											<td>{{ $productoTb->cantidad }}</td>
											<td>{{ $productoTb->costo_compra }}</td>
											<td>{{ $productoTb->fecha_ingreso }}</td>

                                            <td>
                                                <form action="{{ route('producto-tbs.destroy',$productoTb->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('producto-tbs.show',$productoTb->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('producto-tbs.edit',$productoTb->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $productoTbs->links() !!}
            </div>
        </div>
    </div>
@endsection
