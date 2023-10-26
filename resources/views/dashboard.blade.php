@extends('layouts.estilo')

@section('content')
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
              <div class="col-12 col-xl-8 mb-4 mb-xl-0">
              <h3 class="font-weight-bold">
                <i class="fas fa-user-circle"></i> Bienvenido, {{ auth()->user()->name }}!!
              </h3>
              </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                  <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  <i class="mdi mdi-calendar"></i> <span id="currentDateTime"></span>
                  </button>

      <script>
        function updateCurrentDateTime() {
          const now = new Date();
          const formattedDateTime = now.toLocaleString();
          document.getElementById("currentDateTime").textContent = formattedDateTime;
          }

    // Actualiza la hora cada segundo
        setInterval(updateCurrentDateTime, 1000);
    
    // Llama a la función una vez para mostrar la hora inmediatamente
        updateCurrentDateTime();
      </script>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">Enero - Marzo</a>
                      <a class="dropdown-item" href="#">Marzo - Junio</a>
                      <a class="dropdown-item" href="#">Junio - Agosto</a>
                      <a class="dropdown-item" href="#">Agosto - Noviembre</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Detalles de Empleados</p>
                  <p class="font-weight-500">Información detallada sobre el desempeño y la actividad de los empleados dentro del sistema. Esto incluye estadísticas clave y métricas de rendimiento.</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Activos</p>
                      <h3 class="text-primary fs-30 font-weight-medium">235</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Nuevos</p>
                      <h3 class="text-primary fs-30 font-weight-medium">89</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">No-Activos</p>
                      <h3 class="text-primary fs-30 font-weight-medium">45</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Sin Asignar</p>
                      <h3 class="text-primary fs-30 font-weight-medium">65</h3>
                    </div> 
                  </div>
                  <canvas id="order-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">Reportes Postulantes</p>
                  <a href="#" class="text-info">Ver todos</a>
                 </div>
                  <p class="font-weight-500">Un análisis detallado de las solicitudes y actividades de los postulantes. Este informe proporciona información relevante para la toma de decisiones y la gestión de recursos humanos.</p>
                  <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="sales-chart"></canvas>
                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="ml-xl-4 mt-3">
                            <p class="card-title">Postulaciones</p>
                              <h1 class="text-primary">23503</h1>
                              <h3 class="font-weight-500 mb-xl-4 text-primary">Bolivia</h3>
                              <p class="mb-2 mb-xl-0">
                                
La cantidad total de postulaciones dentro del rango de fechas. Esto representa el período en el que 
los candidatos están activamente comprometidos con las ofertas de trabajo disponibles en Bolivia.
                              </p>
                            </div>  
                            </div>
                          <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-6 border-right">
                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                  <table class="table table-borderless report-table">
                                    <tr>
                                      <td class="text-muted">Beni</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">530</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Santa Cruz</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">8751</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Pando</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">1203</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Tarija</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">1031</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Chuquisaca</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">2136</h5></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                <canvas id="north-america-chart"></canvas>
                                <div id="north-america-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="ml-xl-4 mt-3">
                            <p class="card-title">Postulaciones</p>
                              <h1 class="text-primary">23503</h1>
                              <h3 class="font-weight-500 mb-xl-4 text-primary">Bolivia</h3>
                              <p class="mb-2 mb-xl-0">
                              La cantidad total de postulaciones dentro del rango de fechas. Esto representa el período en el que 
                              los candidatos están activamente comprometidos con las ofertas de trabajo disponibles en Bolivia.
                              </p>
                            </div>  
                            </div>
                          <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-6 border-right">
                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                  <table class="table table-borderless report-table">
                                    <tr>
                                      <td class="text-muted">Potosi</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">630</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">La Paz</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">6320</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Oruro</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">1034</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Cochabamba</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">2130</h5></td>
                                    </tr>
                                  </table>
                                </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                <canvas id="south-america-chart"></canvas>
                                <div id="south-america-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
                
    </div>
  </div>
</div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
@endsection
