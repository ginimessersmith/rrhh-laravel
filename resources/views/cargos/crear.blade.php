@extends('layouts.estilo')

@section('tabla')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">CREAR CARGO</h4>
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

                    {!! Form::open(array('route' => 'cargos.store','method'=>'POST')) !!}
                    <div class="form-group">
                        <label for="Nombre">Nombre</label>
                        {!! Form::text('Nombre', null, array('class' => 'form-control', 'id' => 'Nombre')) !!}
                    </div>
                    <div class="form-group">
                        <label for="Descripcion">Descripción</label>
                        {!! Form::text('Descripcion', null, array('class' => 'form-control', 'id' => 'Descripcion')) !!}
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
