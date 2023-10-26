@extends('layouts.estilo')

@section('tabla')
<div class="content-wrapper">

<div class="card mb-3">
    <div class="card-body d-flex justify-content-between">
        <h4 class="card-title">DEPARTAMENTOS</h4>
        <a class="btn btn-dark" href="{{ route('departamentos.create') }}">Nuevo</a>
    </div>
</div>
    <div class="row">
        @foreach ($departamentos as $departamento)
        <div class="col-lg-4 mb-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Departamento:</h4>
                    <table class="table">
                        <tbody>
                            <tr>
                                <th>ID:</th>
                                <td>{{ $departamento->id }}</td>
                            </tr>
                            <tr>
                                <th>Nombre:</th>
                                <td>{{ $departamento->name }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <a class="btn btn-primary" href="{{ route('departamentos.edit', $departamento->id) }}">Editar</a>
                        {!! Form::open(['method' => 'delete', 'route' => ['departamentos.destroy', $departamento->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Borrar', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
