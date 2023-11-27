@extends('layouts.app')

@section('template_title')
    Personas Tb
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Personas Tb') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('personas-tb.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										
										<th>Nombre</th>
										<th>Apellido P</th>
										<th>Apellido M</th>
										<th>Correo</th>
										<th>Telefono</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($personasTbs as $personasTb)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											
											<td>{{ $personasTb->nombre }}</td>
											<td>{{ $personasTb->apellido_p }}</td>
											<td>{{ $personasTb->apellido_m }}</td>
											<td>{{ $personasTb->correo }}</td>
											<td>{{ $personasTb->telefono }}</td>

                                            <td>
                                                <form action="{{ route('personas-tb.destroy',$personasTb->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('personas-tb.show',$personasTb->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('personas-tb.edit',$personasTb->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $personasTbs->links() !!}
            </div>
        </div>
    </div>
@endsection
