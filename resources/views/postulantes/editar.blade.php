@extends('layouts.estilo')

@section('tabla')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">EDITAR POSTULANTE</h4>
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
                    {!! Form::model($postulante, ['method' => 'PATCH','route' => ['postulantes.update', $postulante->id]]) !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                {!! Form::text('Nombre', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <label for="apellido">Apellidos</label>
                                {!! Form::text('Apellido', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <label for="Email">E-mail</label>
                                {!! Form::text('Email', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                            <div class="form-group">
                                <label for="celular">Celular</label>
                                {!! Form::number('Celular', null, array('class' => 'form-control')) !!}
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label for="idCargo">Seleccionar Cargo</label>
                                {{ Form::label('Seleccionar Cargo') }}
                                <select name="idCargo" class="focus border-primary  form-control">
                                    @foreach ($cargo as $cargos)
                                    <option value="{{ $cargos->id }}">{{ $cargos->Nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 my-4">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
