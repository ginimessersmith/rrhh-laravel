@extends('layouts.estilo')

@section('tabla')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">EDITAR DEPARTAMENTOS</h3>
                    <form class="forms-sample" method="POST" action="{{ route('departamentos.update', $departamento->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $departamento->name }}">
                        </div>

                        <div class="my-4">
                            <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                            <a class="btn btn-light" href="{{ route('departamentos.index') }}">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection