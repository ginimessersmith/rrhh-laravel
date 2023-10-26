@extends('layouts.estilo')

@section('tabla')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="page__heading">CARGOS</h3>
                        <a class="btn btn-dark ml-auto" href="{{ route('cargos.create') }}">Nuevo</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cargo as $cargos)
                                <tr>
                                    <td>{{ $cargos->id }}</td>
                                    <td>{{ $cargos->Nombre }}</td>
                                    <td>{{ $cargos->Descripcion }}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{ route('cargos.edit', $cargos->id) }}">Editar</a>
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['cargos.destroy', $cargos->id], 'style' => 'display:inline']) !!}
                                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
