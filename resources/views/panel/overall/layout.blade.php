<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Lebuya | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('vendor/ladda/ladda.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ asset('admin/dist/css/adminlte.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/toastr/build/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    @yield('head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-sign-out-alt"></i>
                </a>
            </li>
        </ul>
    </nav>

    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="{{ url('panel') }}" class="brand-link">
            <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}"
                alt="AdminLTE Logo"
                class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">Lebuya</span>
        </a>

        <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                    <li class="nav-item">
                        <a href="{{ url('panel') }}" class="nav-link">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Tablero
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-gifts"></i>
                            <p>
                                Promociones
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{  url('panel/promotions/create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Crear nuevo</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{  url('panel/promotions') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listado</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tag"></i>
                            <p>
                                Categorías
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{  url('panel/categories/create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Crear nuevo</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{  url('panel/categories') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listado</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tags"></i>
                            <p>
                                Sub-Categorías
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{  url('panel/subcategories/create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Crear nuevo</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{  url('panel/subcategories') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listado</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-store"></i>
                            <p>
                                Productos
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{  url('panel/products/create') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Crear nuevo</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{  url('panel/products') }}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Listado</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <div class="content-wrapper">
        @yield('content')
    </div>

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
        <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; {{ date('Y') }} <a href="#">Lebuya</a>.</strong> Todos los derechos reservados.
  </footer>

</div>

<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('admin/js/redirect.js') }}"></script>
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('vendor/toastr/build/toastr.min.js') }}"></script>
<script src="{{ asset('vendor/ladda/spin.min.js') }}"></script>
<script src="{{ asset('vendor/ladda/ladda.min.js') }}"></script>
<script src="{{ asset('admin/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('vendor/jquery.numeric/jquery.numeric.min.js') }}"></script>
<script src="{{ asset('admin/jscontrollers/overall/toast.js') }}"></script>
<script src="{{ asset('admin/jscontrollers/overall/general.js') }}"></script>

<script>
    var base_url = '{{ url('/') }}/';
    $(function(){
        $('.numeric').numeric();
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>
@yield('footer')
</body>
</html>
