<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>CELASS-Inicio</title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="asset('css/fonts-googleapis.css')" rel="stylesheet" type="text/css">

    <!-- CORE CSS -->
    <link href="{{asset('HTML/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- REVOLUTION SLIDER -->
    <link href="{{asset('HTML/assets/plugins/slider.revolution/css/extralayers.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('HTML/assets/plugins/slider.revolution/css/settings.css')}}" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="{{asset('HTML/assets/css/essentials.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('HTML/assets/css/layout.css')}}" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="{{asset('HTML/assets/css/header-1.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('HTML/assets/css/color_scheme/blue.css')}}" rel="stylesheet" type="text/css" id="color_scheme" />
    <link href="{{asset('HTML/assets/css/layout-datatables.css')}}" rel="stylesheet" type="text/css" />

    <style>
        .pagination > li{
            float: left;
        }
        form{
            float: left;
            margin: 0px;
        }
        form > button{
            width: 35px;
        }
    </style>
</head>

<body class="smoothscroll enable-animation">

<!-- wrapper -->
<div id="wrapper">
    <div id="header" class="sticky header-sm clearfix">

        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">

                <!-- Logo -->
                <a class="logo pull-left" href="index.html">
                    <img src="{{asset('images/logo.jpg')}}" alt="" />
                </a>

                <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                    <nav class="nav-main">

                        <ul id="topMain" class="nav nav-pills nav-main">
                            <li class="dropdown"><!-- HOME -->
                                <a class="dropdown text-red weight-800" href="/inicio">
                                    INICIO
                                </a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown text-red weight-800" href="#">
                                    CERRAR
                                </a>
                            </li>
                        </ul>

                    </nav>
                </div>

            </div>
        </header>
        <!-- /Top Nav -->

    </div>

    <section>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
        </div>
        <div class="container">
            <ul class="nav nav-tabs nav-top-border">
                <li class="active"><a href="#home" data-toggle="tab">Cursos</a></li>
                <li><a href="#profile" data-toggle="tab">Usuarios</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade in active" id="home">
                    <div class="masonry-gallery columns-2 clearfix lightbox" data-img-big="3" data-plugin-options='{"delegate": "a", "gallery": {"enabled": true}}'>
                    <table class="table table-striped table-bordered table-hover" id="cursos">
                        <thead>
                        <tr>
                            <th>Título</th>
                            <th class="hidden-xs">Descripción</th>
                            <th>Tipo Curso</th>
                            <th>Metodologo</th>
                            <th>Inicia</th>
                            <th>Termina</th>
                            <th class="hidden-xs">Url</th>
                            <th class="hidden-xs">Img</th>
                            <th>Editar/Borrar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($cursos as $curso )
                            <tr>
                                <td>{{ $curso->titulo }}</td>
                                <td>{{ $curso->descripcion }}</td>
                                <td>{{ $curso->tipoCurso->tipo }}</td>
                                <td>{{ $curso->user->name }}</td>
                                <td>{{ $curso->fecha_inicio }}</td>
                                <td>{{ $curso->fecha_fin }}</td>
                                <td>{{ $curso->url }}</td>
                                <td class="text-center">
                                    <a class="image-hover" href="{{ asset($curso->img) }}">
                                        <img src="{{ asset($curso->img) }}" class="img-responsive width-50"  alt="...">
                                    </a>
                                </td>
                                <td>
                                    <form action="{{ route('cursos.edit',$curso->id) }}" method="GET">
                                        @csrf
                                        @method('GET')
                                        <button type="submit" class="btn btn-info"><i class="icon-edit"></i></button>
                                    </form>
                                    <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="icon-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile">
                    <table class="table table-striped table-bordered table-hover" id="usuarios">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Correo</th>
                            <th>Editar/Borrar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($usuarios as $usuario )
                            <tr>
                                <td>{{$usuario->name}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>
                                    <form action="{{ route('usuarios.destroy',$usuario->id) }}" method="POST" class="col-2">
                                        <a href="/usuarios/{{$usuario->id}}/edit" class="btn btn-info"><i class="icon-edit"></i></a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="icon-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>



        </div>
    </section>


    <footer class="page-footer font-small bg-blue pt-4" id="footer" style="background-image: url({{ asset('images/backgrounds/azul4.jpg') }})">
        <!-- /col #1 -->
        <div class="copyright">
            <div class="container">
                &copy; Todos los derechos reservados por, CELASS
            </div>
        </div>
    </footer>

    <!-- /wrapper -->


    <!-- SCROLL TO TOP -->
    <a class="text-red bg-blue" href="#" id="toTop"></a>


    <!-- PRELOADER -->
    <div id="preloader">
        <div class="inner">
            <span class="loader"></span>
        </div>
    </div><!-- /PRELOADER -->


    <!-- JAVASCRIPT FILES -->
    <script type="text/javascript">var plugin_path = '{{asset("HTML/assets/plugins/")}}';</script>
    <script type="text/javascript" src="{{asset('HTML/assets/plugins/jquery/jquery-2.1.4.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('HTML/assets/js/scripts.js')}}"></script>


    <script type="text/javascript" src="{{asset('HTML/assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('HTML/assets/plugins/datatables/js/dataTables.tableTools.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('HTML/assets/plugins/datatables/js/dataTables.colReorder.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('HTML/assets/plugins/datatables/js/dataTables.scroller.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('HTML/assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('HTML/assets/plugins/select2/js/select2.full.min.js')}}"></script>
    <script type="text/javascript">
        function initTable5() {

            var table = jQuery('#cursos');

            /* Fixed header extension: http://datatables.net/extensions/keytable/ */

            var oTable = table.dataTable({
                "order": [
                    [0, 'asc']
                ],
                "lengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],
                "pageLength": 10, // set the initial value,
                "columnDefs": [{  // set default column settings
                    'orderable': false,
                    'targets': [0]
                }, {
                    "searchable": false,
                    "targets": [0]
                }],
                "order": [
                    [1, "asc"]
                ]
            });

            var oTableColReorder = new $.fn.dataTable.ColReorder( oTable );

            var tableWrapper = jQuery('#sample_6_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
            tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown





            var table2 = jQuery('#usuarios');

            /* Fixed header extension: http://datatables.net/extensions/keytable/ */

            var oTable2 = table2.dataTable({
                "order": [
                    [0, 'asc']
                ],
                "lengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],
                "pageLength": 10, // set the initial value,
                "columnDefs": [{  // set default column settings
                    'orderable': false,
                    'targets': [0]
                }, {
                    "searchable": false,
                    "targets": [0]
                }],
                "order": [
                    [1, "asc"]
                ]
            });

            var oTableColReorder = new $.fn.dataTable.ColReorder( oTable2 );

            var tableWrapper = jQuery('#sample_6_wrapper'); // datatable creates the table wrapper by adding with id {your_table_jd}_wrapper
            tableWrapper.find('.dataTables_length select').select2(); // initialize select2 dropdown
        }


        // Table Init
        initTable5();
    </script>
</body>
</html>
