@extends('layouts.estilo')

@section('tabla')
<div class="container-xl">

    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">DEPARTAMENTOS</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <a class="btn btn-dark" href="{{ route('departamentos.create') }}">Nuevo</a>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead style="background-color:#6777ef">
                                        <tr>
                                            <th style="display: none; color:#fff;">ID</th>
                                            <th>Nombre</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($departamentos as $departamento)
                                      <tr>
                                          <td style="display: none;">{{ $departamento->id }}</td>
                                          <td>{{ $departamento->name }}</td>
                                          
                                          <td>
                                              <a class="btn btn-primary" href="{{ route('departamentos.edit',$departamento->id) }}">Editar</a>
                                              {!! Form::open(['method' => 'delete','route' => ['departamentos.destroy', $departamento->id],'style'=>'display:inline']) !!}
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
    </section>
</div>
@endsection