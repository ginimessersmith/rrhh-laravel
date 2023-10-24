<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>RRHH</title>
    <!-- Agrega tus enlaces a tus estilos personalizados aquí -->
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
                            <h3>Registrate</h3>
                            {{--<h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>--}}
                            <form class="pt-3" method="POST" action="{{ route('register') }}">
                                @csrf <!-- Agregamos el campo @csrf aquí -->

                                <!-- Agrega los campos de registro de Laravel Jetstream -->
                                <div class="form-group">
                                    {{--<label for="name">{{ __('Name') }}</label>--}}
                                    <input id="name" type="text" class="form-control form-control-lg" name="name" value="{{ old('name') }}" required autofocus autocomplete="name"placeholder="Nombre">
                                </div>

                                <div class="form-group">
                                    {{--<label for="email">{{ __('Email') }}</label>--}}
                                    <input id="email" type="email" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="E-mail">
                                </div>

                                <div class="form-group">
                                    {{--<label for="password">{{ __('Password') }}</label>--}}
                                    <input id="password" type="password" class="form-control form-control-lg" name="password" required autocomplete="new-password"placeholder="Contraseña">
                                </div>

                                <div class="mb-4">
                                    {{--<label for="password_confirmation">{{ __('Confirm Password') }}</label>--}}
                                    <input id="password_confirmation" type="password" class="form-control form-control-lg" name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar Contraseña">
                                </div>

                                <!-- Botón de registro -->
                                <div class="mt-3">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">{{ __('REGISTRARSE') }}</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Ya tienes una Cuenta? <a href="{{ route('login') }}" class="text-primary">{{ __('Ingresar') }}</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Agrega tus enlaces a scripts personalizados aquí -->
    <script src="{{ asset('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <script src="{{ asset('admin/assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('admin/assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('admin/assets/js/template.js') }}"></script>
    <script src="{{ asset('admin/assets/js/settings.js') }}"></script>
    <script src="{{ asset('admin/assets/js/todolist.js') }}"></script>
</body>

</html>
