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

    <!-- THEME CSS -->
    <link href="{{asset('HTML/assets/css/essentials.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('HTML/assets/css/layout.css')}}" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="{{asset('HTML/assets/css/header-1.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('HTML/assets/css/color_scheme/blue.css')}}" rel="stylesheet" type="text/css" id="color_scheme" />

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
    <div class="container">
        @yield('content')
    </div>


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

</body>
</html>
