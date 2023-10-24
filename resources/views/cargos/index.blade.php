@extends('layouts.estilo')

@section('tabla')
<div class="container-xl">

<section class="section">

      <div class="section-body">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card">
                      <div class="card-body">
                          <div class="d-flex justify-content-between align-items-center mb-3">
                          <h3 class="page__heading">CARGOS</h3> 
                          <a class="btn btn-dark ml-auto" href="{{ route('cargos.create') }}">Nuevo</a>
                          </div>

                          <div class="table-responsive">
                              <table class="table table-striped">
                                  <thead style="background-color:#6777ef">
                                  <tr>
                                      <th style=>ID</th>
                                      <th style=>Nombre</th>
                                      <th style=>Descripcion</th>
                                      <th style=>Acciones</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach ($cargo as $cargos)
                                      <tr>
                                          <td>{{ $cargos->id }}</td>
                                          <td>{{ $cargos->Nombre}}</td>
                                          <td>{{ $cargos->Descripcion }}</td>
                                          <td>
                                              <a class="btn btn-primary" href="{{ route('cargos.edit',$cargos->id) }}">Editar</a>
                                              {!! Form::open(['method' => 'DELETE','route' => ['cargos.destroy', $cargos->id],'style'=>'display:inline']) !!}
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
