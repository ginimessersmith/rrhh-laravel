@extends('layouts.estilo')

@section('tabla')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">CREAR EMPLEADOS</h2>
                    <p class="card-description">Complete el formulario para crear un empleado.</p>
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
                    {!! Form::open(array('route' => 'empleados.store', 'method' => 'POST')) !!}
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        {!! Form::text('Nombre', null, array('class' => 'form-control', 'id' => 'Nombre', 'placeholder' => 'Nombre')) !!}
                    </div>
                    <div class="form-group">
                        <label for="Apellido">Apellidos</label>
                        {!! Form::text('Apellido', null, array('class' => 'form-control', 'id' => 'Apellido', 'placeholder' => 'Apellidos')) !!}
                    </div>
                    <div class="form-group">
                        <label for="Email">E-mail</label>
                        {!! Form::text('Email', null, array('class' => 'form-control', 'id' => 'Email', 'placeholder' => 'E-mail')) !!}
                    </div>
                    <div class="form-group">
                        <label for="Celular">Celular</label>
                        {!! Form::number('Celular', null, array('class' => 'form-control', 'id' => 'Celular', 'placeholder' => 'Celular')) !!}
                    </div>
                    <div class="form-group">
                        <label for="idCargo">Seleccionar Cargo</label>
                        <select name="idCargo" class="form-control" id="idCargo">
                            @foreach ($cargo as $cargos)
                            <option value="{{ $cargos->id }}">{{ $cargos->Nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                    <button class="btn btn-light">Cancelar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
