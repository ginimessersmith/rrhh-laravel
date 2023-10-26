@extends('layouts.estilo')

@section('tabla')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title">
                            {{ __('Gestionar Bitácora') }}
                        </h1>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Nº</th>
                                        <th>Usuario</th>
                                        <th>Apartado</th>
                                        <th>Acción</th>
                                        <th>Columna</th>
                                        <th>Fecha</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($actividades as $actividad)
                                    <tr>
                                        <td>{{ $actividad->id }}</td>
                                        <td>{{ $actividad->name }}</td>
                                        <td>{{ $actividad->log_name }}</td>
                                        <td>{{ $actividad->description }}</td>
                                        <td>{{ $actividad->subject_id }}</td>
                                        <td>{{ $actividad->created_at }}</td>
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
