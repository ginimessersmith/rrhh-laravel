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
                          <h3 class="page__heading">EMPLEADOS</h3> 
                          <a class="btn btn-dark ml-auto" href="{{ route('empleados.create') }}">Nuevo</a>
                          </div>

                          <div class="table-responsive">
                              <table class="table table-striped">
                                  <thead style="background-color:#6777ef">
                                  <tr>
                                      <th style=>ID</th>
                                      <th style=>Nombres</th>
                                      <th style=>Apellidos</th>
                                      <th style=>E-mail</th>
                                      <th style=>Celular</th>
                                      <th style=>Cargo</th>
                                      <th style=>Acciones</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach ($empleado as $empleados)
                                      <tr>
                                          <td>{{ $empleados->id }}</td>
                                          <td>{{ $empleados->Nombre}}</td>
                                          <td>{{ $empleados->Apellido }}</td>
                                          <td>{{ $empleados->Email}}</td>
                                          <td>{{ $empleados->Celular }}</td>
                                        @foreach ($cargo as $cargos)
                                                    @if ($cargos->id == $empleados->idCargo)
                                                        <td>{{ $cargos->Nombre }}</td>
                                                    @endif
                                        @endforeach
                                          <td>
                                              <a class="btn btn-primary" href="{{ route('empleados.edit',$empleados->id) }}">Editar</a>
                                              {!! Form::open(['method' => 'DELETE','route' => ['empleados.destroy', $empleados->id],'style'=>'display:inline']) !!}
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
