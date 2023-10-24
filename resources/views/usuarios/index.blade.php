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
                          <h3 class="page__heading">USUARIOS</h3> 
                          <a class="btn btn-dark ml-auto" href="{{ route('usuarios.create') }}">Nuevo</a>
                          </div>

                          <div class="table-responsive">
                              <table class="table table-striped">
                                  <thead style="background-color:#6777ef">
                                  <tr>
                                      <th style=>ID</th>
                                      <th style=>Nombre</th>
                                      <th style=>E-mail</th>
                                      <th style=>Acciones</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  @foreach ($usuarios as $usuario)
                                      <tr>
                                          <td>{{ $usuario->id }}</td>
                                          <td>{{ $usuario->name }}</td>
                                          <td>{{ $usuario->email }}</td>
                                          <td>
                                              <a class="btn btn-primary" href="{{ route('usuarios.edit',$usuario->id) }}">Editar</a>
                                              {!! Form::open(['method' => 'DELETE','route' => ['usuarios.destroy', $usuario->id],'style'=>'display:inline']) !!}
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
