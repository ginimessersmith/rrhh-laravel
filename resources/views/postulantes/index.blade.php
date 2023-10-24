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
                          <h3 class="page__heading">POSTULANTES</h3> 
                          <a class="btn btn-dark ml-auto" href="{{ route('postulantes.create') }}">Nuevo</a>
                          </div>

                          <div class="table-responsive">
                              <table class="table table-striped">
                                  <thead style="background-color:#6777ef">
                                  <tr>
                                      <th>ID</th>
                                      <th>Nombres</th>
                                      <th>Apellidos</th>
                                      <th>E-mail</th>
                                      <th>Celular</th>
                                      <th>Cargo</th>
                                      <th >Acciones</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach ($postulante as $postulantes)
                                      <tr>
                                          <td>{{ $postulantes->id }}</td>
                                          <td>{{ $postulantes->Nombre}}</td>
                                          <td>{{ $postulantes->Apellido }}</td>
                                          <td>{{ $postulantes->Email}}</td>
                                          <td>{{ $postulantes->Celular }}</td>

                                          @foreach ($cargo as $cargos)
                                                    @if ($cargos->id == $postulantes->idCargo)
                                                        <td>{{ $cargos->Nombre }}</td>
                                                    @endif
                                        @endforeach
                                          <td>
                                            
                                              <a class="btn btn-primary" href="{{ route('postulantes.edit',$postulantes->id) }}">Editar</a>
                                              {!! Form::open(['method' => 'DELETE','route' => ['postulantes.destroy', $postulantes->id],'style'=>'display:inline']) !!}
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
