<html>
    <head>
        <title>

        </title>
        <link href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="{{asset('css/essentials.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/layout.css')}}" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="{{asset('css/header-1.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/blue.css')}}" rel="stylesheet" type="text/css" id="color_scheme" />

    <!-- REVOLUTION SLIDER -->
    <link href="{{asset('css/extralayers.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/settings.css')}}" rel="stylesheet" type="text/css" />
    </head>

    <body>

 <div class="container">
    @yield('content')
 </div>
 <!-- JAVASCRIPT FILES -->
        <script type="text/javascript">var plugin_path = '{{asset('js/plugins')}}/';</script>
        <script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>

        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/demo.revolution_slider.js')}}"></script>
    </body>
</html>
