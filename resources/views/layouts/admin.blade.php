<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{secure_asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{secure_asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{secure_asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{secure_asset('plugins/jqvmap/jqvmap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{secure_asset('dist/css/adminlte.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{secure_asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{secure_asset('plugins/daterangepicker/daterangepicker.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{secure_asset('plugins/summernote/summernote-bs4.min.css')}}">

    <link rel="stylesheet" href="{{ secure_asset('dist/css/datatables.css')}}">
    <link rel="stylesheet" href="{{ secure_asset('dist/jquery-dataTables/css/jquery.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('dist/jquery-dataTables/css/buttons.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('dist/jquery-dataTables/css/fixedColumns.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('dist/jquery-dataTables/css/colReorder.dataTables.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('dist/jquery-dataTables/css/select.dataTables.min.css') }}">
<!-- تضمين السكربت لجوجل ترجمة العناصر -->
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    // دالة تهيئة جوجل لترجمة العناصر
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
    @yield('styles')
    <style>
        .error {
            color:#F00;
        }
        .note-editing-area {
            height: 250px ;
        }
    </style>
    <style>
        #loader_new {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            width: 100%;
            z-index: 10000;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <div id="loader_new" style="            background: rgba(0, 0, 0, 0.75) url({{secure_asset('images/loading2.gif')}}) no-repeat center center;
        "></div>
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__shake" src="{{secure_asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Navbar Search -->
            <li class="nav-item">
                <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                    <i class="fas fa-search"></i>
                </a>
                {{-- <div class="translate">
                  <div id="google_translate_element"></div>
                </div> --}}
         
         <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> 
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                                
                                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>



        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">Dashboard Admin</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                    <li class="nav-item">
                        <a href="{{route('admin.stories')}}" class="nav-link {{ request()->routeIs('admin.stories') ? 'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Stories </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.services')}}" class="nav-link {{ request()->routeIs('admin.services') ? 'active' : '' }} ">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Services </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.events')}}" class="nav-link {{ request()->routeIs('admin.events') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Events</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.researches')}}" class="nav-link {{ request()->routeIs('admin.researches') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Researches</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.journals')}}" class="nav-link {{ request()->routeIs('admin.journals') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Journals</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="{{route('admin.courses')}}" class="nav-link {{ request()->routeIs('admin.courses') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Courses</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.blogs')}}" class="nav-link {{ request()->routeIs('admin.blogs') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Blogs</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.booking')}}" class="nav-link {{ request()->routeIs('admin.booking') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Booking</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.setting')}}" class="nav-link {{ request()->routeIs('admin.setting') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p> Setting</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('admin.logout')}}" class="nav-link ">
                            <i class="far fa-circle nav-icon"></i>
                            <p> logout</p>
                        </a>
                    </li>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="container">
            @yield('content')
            <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2021 .</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.2.0
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{secure_asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{secure_asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
{{--<script>--}}
{{--    $.widget.bridge('uibutton', $.ui.button)--}}
{{--</script>--}}
<!-- Bootstrap 4 -->
<script src="{{secure_asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{secure_asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{secure_asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{secure_asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{secure_asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{secure_asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{secure_asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{secure_asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{secure_asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{secure_asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{secure_asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{secure_asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src="{{secure_asset('dist/js/demo.js')}}"></script>--}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{secure_asset('dist/js/jquery-validate/jquery.validate.js')}}"></script>
<script src="{{secure_asset('dist/js/jquery-validate/jquery.validate.min.js')}}"></script>
<script src="{{secure_asset('dist/js/jquery-validate/additional-methods.js')}}"></script>
<script src="{{secure_asset('dist/js/jquery-validate/additional-methods.min.js')}}"></script>
<script src="{{secure_asset('dist/js/pages/dashboard.js')}}"></script>
<script src="{{secure_asset('dist/js/datatables.js')}}"></script>
<script src="{{ secure_asset('dist/jquery-dataTables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ secure_asset('dist/jquery-dataTables/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ secure_asset('dist/jquery-dataTables/js/jszip.min.js') }}"></script>
<script src="{{ secure_asset('dist/jquery-dataTables/js/pdfmake.min.js') }}"></script>
<script src="{{ secure_asset('dist/jquery-dataTables/js/vfs_fonts.js') }}"></script>
<script src="{{ secure_asset('dist/jquery-dataTables/js/buttons.html5.min.js') }}"></script>
<script src="{{ secure_asset('dist/jquery-dataTables/js/buttons.print.min.js') }}"></script>
<script src="{{ secure_asset('dist/jquery-dataTables/js/dataTables.fixedColumns.min.js') }}"></script>
<script src="{{ secure_asset('dist/jquery-dataTables/js/buttons.colVis.min.js') }}"></script>
<script src="{{ secure_asset('dist/jquery-dataTables/js/dataTables.colReorder.min.js') }}"></script>
<script src="{{ secure_asset('dist/jquery-dataTables/js/dataTables.select.min.js') }}"></script>
<script>
    $(function () {
        // Summernote
        // Define a custom button for blockquote
        var blockquoteButton = function (context) {
            var ui = $.summernote.ui;
            var button = ui.button({
                contents: '<i class="fas fa-quote-right"></i>',
                tooltip: 'Blockquote',
                click: function () {
                    context.invoke('editor.formatBlock', '<blockquote>');
                }
            });
            return button.render();
        };

        $('.textarea-editor').summernote({
            toolbar: [
                ['heading', ['h1', 'h2', 'h3', 'h4', 'h5', 'h6']],

                ['style', [ 'header1' ,'bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript', 'fontsize', 'color', 'fontname']],
                ['para', ['ul', 'ol']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview']],
                ['help', ['help']],
                ['custom', ['blockquote']]
            ],
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Georgia', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana'],
            fontSize: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36'],
            buttons: {
                blockquote: blockquoteButton
            }
        });
        $('.textarea-editor2').summernote({
            toolbar: [
                ['heading', ['h1', 'h2', 'h3', 'h4', 'h5', 'h6']],
                ['style', ['header1' ,'bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript', 'fontsize', 'color', 'fontname']],
                ['para', ['ul', 'ol']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview']],
                ['help', ['help']],
                ['custom', ['blockquote']]
            ],
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Georgia', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana'],
            fontSize: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36'],
            buttons: {
                blockquote: blockquoteButton
            }
        });
        $('.textarea-editor3').summernote({
            toolbar: [
                ['heading', ['h1', 'h2', 'h3', 'h4', 'h5', 'h6']],
                ['style', ['header1' ,'bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript', 'fontsize', 'color', 'fontname']],
                ['para', ['ul', 'ol']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview']],
                ['help', ['help']],
                ['custom', ['blockquote']]
            ],
            fontNames: ['Arial', 'Arial Black', 'Comic Sans MS', 'Courier New', 'Georgia', 'Impact', 'Tahoma', 'Times New Roman', 'Verdana'],
            fontSize: ['8', '9', '10', '11', '12', '14', '16', '18', '24', '36'],
            buttons: {
                blockquote: blockquoteButton
            }
        });
    })
</script>
@yield('scripts')

</body>
</html>
