@extends('layouts.estilo')

@section('tabla')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">EDITAR CARGO</h4>
                    <form class="forms-sample" method="POST" action="{{ route('cargos.update', $cargo->id) }}">
                        @csrf
                        @method('PATCH')

                        <div class="form-group">
                            <label for="Nombre">Nombre</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" value="{{ $cargo->Nombre }}">
                        </div>

                        <div class="form-group">
                            <label for="Descripcion">Descripción</label>
                            <input type="text" class="form-control" id="Descripcion" name="Descripcion" value="{{ $cargo->Descripcion }}">
                        </div>

                        <div class="my-4">
                            <button type="submit" class="btn btn-primary mr-2">Guardar</button>
                            <a class="btn btn-light" href="{{ route('cargos.index') }}">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
