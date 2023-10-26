@extends('layouts.estilo')

@section('tabla')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">CREAR POSTULANTE</h4>
                    @if ($errors->any())
                    <div class="alert alert-dark alert-dismissible fade show" role="alert">
                        <strong>¡Revise los campos!</strong>
                        @foreach ($errors->all() as $error)
                        <span class="badge badge-danger">{{ $error }}</span>
                        @endforeach
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif

                    <form class="forms-sample" method="POST" action="{{ route('postulantes.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="Nombre" value="{{ old('Nombre') }}">
                        </div>

                        <div class="form-group">
                            <label for="apellido">Apellidos</label>
                            <input type="text" class="form-control" id="apellido" name="Apellido" value="{{ old('Apellido') }}">
                        </div>

                        <div class="form-group">
                            <label for="Email">E-mail</label>
                            <input type="text" class="form-control" id="Email" name="Email" value="{{ old('Email') }}">
                        </div>

                        <div class="form-group">
                            <label for="celular">Celular</label>
                            <input type="number" class="form-control" id="celular" name="Celular" value="{{ old('Celular') }}">
                        </div>

                        <div class="form-group">
                            <label for="idCargo">Seleccionar Cargo</label>
                            <select name="idCargo" class="form-control">
                                @foreach ($cargo as $cargos)
                                <option value="{{ $cargos->id }}">{{ $cargos->Nombre }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
