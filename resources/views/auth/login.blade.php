<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>RRHH</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('admin/assets/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('admin/assets/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('admin/assets/images/favicon.png') }}" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-center py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="{{ asset('admin/assets/images/logo.svg') }}" alt="logo">
              </div>
              <h4>Iniciar Sesion</h4>
                {{--<h6 class="font-weight-light">Sign in to continue.</h6>--}}
              <form class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf <!-- Agregamos el campo @csrf aquí -->

                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Contraseña">
                </div>
                <div class="mt-3">
                  <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">INICIAR SESION</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  {{--<div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>--}}
                  <a href="#" class="auth-link text-black">Olvidaste tu Contraseña?</a>
                </div>
                {{--<div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook mr-2"></i>Connect using Facebook
                  </button>
                </div>--}}
                <div class="text-center mt-4 font-weight-light">
                  No tienes una Cuenta? <a href="{{ route('register') }}" class="text-primary">Registrarse</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
  <script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('admin/assets/js/template.js') }}"></script>
  <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
  <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
  <!-- endinject -->
</body>

</html>
