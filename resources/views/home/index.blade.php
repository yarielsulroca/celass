<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html> <!--<![endif]-->
<head>
    @yield('head')
    <meta charset="utf-8" />
    @yield('title') <title>Celass</title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />
    <meta name="Author" content="Yariel Sulroca" />
    <meta name="Email" content="sulroca@gmail.com" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe)  -->
    <!--link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" /-->

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

<!--
    AVAILABLE BODY CLASSES:

    smoothscroll 			= create a browser smooth scroll
    enable-animation		= enable WOW animations

    bg-grey					= grey background
    grain-grey				= grey grain background
    grain-blue				= blue grain background
    grain-green				= green grain background
    grain-blue				= blue grain background
    grain-orange			= orange grain background
    grain-yellow			= yellow grain background

    boxed 					= boxed layout
    pattern1 ... patern11	= pattern background
    menu-vertical-hide		= hidden, open on click

    BACKGROUND IMAGE [together with .boxed class]
    data-background="assets/images/boxed_background/1.jpg"
-->
<body class="smoothscroll enable-animation">
    <div style="background-image: url({{ asset('images/backgrounds/fondo_azul1.jpg') }}) ">
        <div id="wrapper">

            <div id="header" class="sticky transparent clearfix">

                <!-- TOP NAV -->
                <header id="topNav">
                    <div class="container">

                        <!-- Mobile Menu Button -->
                        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Logo -->
                        <a class="logo pull-left" href="/inicio">
                            <img src="{{ asset('images/buttons/logo.jpg') }}" alt="/inicio" /> <!-- light logo -->

                        </a>

                        <!--
                            Top Nav

                            AVAILABLE CLASSES:
                            submenu-dark = dark sub menu
                        -->
                        <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                            <nav class="nav-main">

                                <!--
                                    NOTE

                                    For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                                    Direct Link Example:

                                    <li>
                                        <a href="#">HOME</a>
                                    </li>
                                -->
                                <ul id="topMain" class="nav nav-pills nav-main">
                                    <li class="dropdown active"><!-- INICIO -->
                                        <a class="" href="/inicio">
                                            Inicio
                                        </a>
                                    </li>
                                    <li class="dropdown"><!-- HOME -->
                                        <a class="" href="#">
                                            Conocenos
                                        </a>
                                    </li>
                                    <li class="dropdown"><!-- HOME -->
                                        <a class="" href="#">
                                            Contacto
                                        </a>
                                    </li>
                                    <li class="dropdown"><!-- HOME -->
                                        <a class="dropdown-toggle" href="#">
                                            Eventos
                                        </a>
                                    </li>
                                </ul>

                            </nav>
                        </div>

                    </div>
                </header>
                <!-- /Top Nav -->

            </div>

            <!-- REVOLUTION SLIDER -->
            <section id="slider" class="fullwidthbanner-container roundedcorners">
                <!--
                    Navigation Styles:

                        data-navigationStyle="" theme default navigation

                        data-navigationStyle="preview1"
                        data-navigationStyle="preview2"
                        data-navigationStyle="preview3"
                        data-navigationStyle="preview4"

                    Bottom Shadows
                        data-shadow="1"
                        data-shadow="2"
                        data-shadow="3"

                    Slider Height (do not use on fullscreen mode)
                        data-height="300"
                        data-height="350"
                        data-height="400"
                        data-height="450"
                        data-height="500"
                        data-height="550"
                        data-height="600"
                        data-height="650"
                        data-height="700"
                        data-height="750"
                        data-height="800"
                -->
                <div class="fullscreenbanner" data-navigationStyle="preview4">
                    <ul class="hide">

                        <!-- SLIDE 1  -->
                        <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 1" data-thumb="{{asset('images/buttons/celass1.gif')}}">

                            <img src="{{asset('images/buttons/celass1.gif')}}" data-lazyload="{{asset('images/buttons/celass1.gif')}}" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

                            <div class="overlay dark-2"><!-- dark overlay [1 to 9 opacity] --></div>

                            <div class="tp-caption customin ltl tp-resizeme text_white"
                                 data-x="center"
                                 data-y="180"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1000"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 10;">
                                <span class="weight-300">Centro de Estudios Laborales y de Seguridad Social</span>
                            </div>

                            <div class="tp-caption customin ltl tp-resizeme large_bold_white"
                                 data-x="center"
                                 data-y="230"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1200"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 10;">
                                CELASS
                            </div>

                            <div class="tp-caption customin ltl tp-resizeme small_light_white"
                                 data-x="center"
                                 data-y="350"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1400"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 10; width: 750px; max-width: 750px; white-space: normal; text-align:center;">
                                Escuerla Ramal, Ministerio del trabajo
                            </div>

                            <!--div class="tp-caption customin ltl tp-resizeme"
                                 data-x="center"
                                 data-y="438"
                                 data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                                 data-speed="800"
                                 data-start="1550"
                                 data-easing="easeOutQuad"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="1000"
                                 data-endeasing="Power4.easeIn" style="z-index: 10;">
                                <a href="#purchase" class="btn btn-default btn-lg">
                                    <span>Iniciar Hora</span>
                                </a>
                            </div-->

                        </li>

                        <!-- SLIDE 2  -->
                        <!-- SLIDE 3  -->
                        <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 3" data-thumb="{{asset('demo/006.jpg')}}">

                            <img src="{{asset('demo/1x1.png')}}" data-lazyload="{{asset('demo/005.jpg')}}" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

                            <div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>

                            <div class="tp-caption very_large_text lfb ltt tp-resizeme"
                                 data-x="right" data-hoffset="-100"
                                 data-y="center" data-voffset="-100"
                                 data-speed="600"
                                 data-start="800"
                                 data-easing="Power4.easeOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn">
                                NOMBRE DEL EVENTO
                            </div>

                            <div class="tp-caption medium_light_white lfb ltt tp-resizeme"
                                 data-x="right" data-hoffset="-100"
                                 data-y="center" data-voffset="10"
                                 data-speed="600"
                                 data-start="900"
                                 data-easing="Power4.easeOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn">
                                descripcion, fecha hora lugar etc,<br/>
                                otro modo de mostrarlo<br/>
                                <span style="font-size:24px;font-weight:400;">&ndash; musica &ndash; danza &ndash; teatro</span>
                            </div>

                        </li>

                        <!-- SLIDE 2  -->
                        <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off" data-title="Slide title 2" data-thumb="{{asset('images/Celass/celass_2.jpg')}}">

                            <img src="{{asset('images/Celass/celass_2.jpg')}}" data-lazyload="{{asset('images/Celass/celass_2.jpg')}}" alt="" data-bgfit="cover" data-bgposition="center bottom" data-bgrepeat="no-repeat" />

                            <div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>

                            <div class="tp-caption very_large_text lfb ltt tp-resizeme"
                                 data-x="right" data-hoffset="-100"
                                 data-y="center" data-voffset="-100"
                                 data-speed="600"
                                 data-start="800"
                                 data-easing="Power4.easeOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn">
                                Misión:
                            </div>

                            <div class="tp-caption medium_light_white lfb ltt tp-resizeme"
                                 data-x="right" data-hoffset="-100"
                                 data-y="center" data-voffset="10"
                                 data-speed="600"
                                 data-start="900"
                                 data-easing="Power4.easeOut"
                                 data-splitin="none"
                                 data-splitout="none"
                                 data-elementdelay="0.01"
                                 data-endelementdelay="0.1"
                                 data-endspeed="500"
                                 data-endeasing="Power4.easeIn">
                                descripcion, fecha hora lugar etc,<br/>
                                otro modo de mostrarlo<br/>
                                <span style="font-size:24px;font-weight:400;">&ndash; musica &ndash; danza &ndash; teatro</span>
                            </div>

                        </li>

                    </ul>
                </div>
            </section>
            <!-- /REVOLUTION SLIDER -->

            <!-- Welcome -->
            <section style="padding: 20px 0;">
                <div class="container">

                    <div class="text-center">
                        <h1 class="nomargin-bottom" style="color: white;"> Cursos vigentes por nuestro Centro:</h1>
                        <h2 class="col-sm-10 col-sm-offset-1 nomargin-bottom weight-300 text-muted size-20" style="color: rgb(255, 255, 255)">Usted puede disfrutar de los siguientes cursos</h2>
                    </div>

                </div>
            </section>
            <!-- Welcome -->

            <!-- Portfolio -->
            <section>
                <div class="container">

                    <div id="portfolio" class="portfolio-nogutter">
                         <div class="col-md-9 col-sm-9">
                             <table class="table table-responsive justify-content-center col-auto">
                                @foreach ($cursos as $curso )
                                 <th class= "col-3">
                                    <div class="row mix-grid">
                                        @if($curso->tipo_id > 6)
                                                    <div class="col-md-3 col-sm-3 mix development" style="background: white;"><!-- item -->
                                                    @else
                                                    <div class="col-md-3 col-sm-3 mix photography" style="background: white;"><!-- item -->
                                                    @endif
                                                        <div class="item-box">
                                                            <figure>
                                                                <span class="item-hover">
                                                                    <span class="overlay dark-5"></span>
                                                                        <span class="inner">
                                                                            <!-- details -->
                                                                            <a class="ico-rounded" href="#">
                                                                                <span class="fa fa-align-justify size-20"></span>
                                                                            </a>

                                                                        </span>
                                                                </span>
                                                                    <img class="img-responsive" src="{{asset($curso->img)}}" width="600" height="399" alt="">
                                                            </figure>

                                                            <div class="item-box-desc">
                                                                <h2 style="color: rgb(235, 75, 75)">{{$curso->tipoCurso->tipo }}</h6>
                                                                    <br>
                                                                <h4>{{$curso->titulo }}</h3>
                                                                <h6>Metodólogo:{{$curso->user->name}}</h6>
                                                                <h6>Correo_Electrónico:{{$curso->user->email}}</h6>
                                                                <ul class="list-inline categories nomargin">
                                                                    <li><p style="color: black">{{$curso->descripcion}}</p></li>
                                                                </ul>
                                                                <ul class="list-inline categories nomargin">
                                                                    <li><a href="{{$curso->url}}" style="color: rgb(107, 0, 139)">Ir al Curso</a></li>
                                                                </ul>
                                                            </div>

                                                        </div>

                                                    </div><!-- /item -->
                                                    <br>

                                 </th>
                                 @endforeach
                             </table>




                            </div>

                        </div>

                        <div class="col-md-3 col-sm-3">
                            <div style="color: white;">Filtro :</div>
                            <ul class="nav nav-pills mix-filter margin-bottom-60">
                                <li data-filter="all" class="filter active"><a href="#" style="color: white;">Todos</a></li>
                                <li data-filter="development" class="filter"><a href="#" style="color: white;">Superación de Posgrado:</a></li>
                                <li data-filter="photography" class="filter"><a href="#" style="color: white;">Preparación</a></li>
                            </ul>

                        </div>

                    </div>

                </div>
            </section>
            <!-- /Portfolio -->

            <!-- Parallax -->
            <section class="parallax parallax-2 padding-xxs" style="background-image: url('{{asset('images/parallax.jpg')}}'); background-position: 50% 84px;">
                <div class="overlay dark-4"><!-- dark overlay [0 to 9 opacity] --></div>

                <div class="container">

                    <div class="row countTo-md text-center">

                        <div class="col-xs-6 col-sm-3">
                            <i class="fa fa-youtube-play"></i>
                            <span class="countTo" data-speed="3000">1303</span>
                            <h5>Youtube</h5>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <i class="fa fa-instagram"></i>
                            <span class="countTo" data-speed="3000">56000</span>
                            <h5>Instagram</h5>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <i class="fa fa-twitter"></i>
                            <span class="countTo" data-speed="3000">4897</span>
                            <h5>Twitter</h5>
                        </div>

                        <div class="col-xs-6 col-sm-3">
                            <i class="fa fa-facebook"></i>
                            <span class="countTo" data-speed="3000">9877</span>
                            <h5>Facebook</h5>
                        </div>

                    </div>

                </div>
            </section>

             <!-- Enlaces RElacioandos -->
            <section>
                <div class="container">

                    <header class="text-center margin-bottom-60">
                        <h1 class="weight-300" style="color: rgb(104, 6, 6)">Sitios Relacionados con nuestro Centro</h1>
                        <h2 class="weight-300 letter-spacing-1 size-13"><span>Actualizandos</span></h2>
                    </header>

                    <!--
                        controlls-over		= navigation buttons over the image
                        buttons-autohide 	= navigation buttons visible on mouse hover only

                        data-plugin-options:
                            "singleItem": true
                            "autoPlay": true (or ms. eg: 4000)
                            "navigation": true
                            "pagination": true
                            "items": "4"

                        owl-carousel item paddings
                            .owl-padding-0
                            .owl-padding-3
                            .owl-padding-6
                            .owl-padding-10
                            .owl-padding-15
                            .owl-padding-20
                    -->
                    <div class="owl-carousel owl-padding-10 buttons-autohide controlls-over" data-plugin-options='{"singleItem": false, "items":"4", "autoPlay": 4000, "navigation": true, "pagination": false}'>
                        <div class="img-hover">
                            <a href="#">
                                <img class="img-responsive" src="{{asset('demo/031.jpg')}}" alt="">
                            </a>

                            <h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
                            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                            <ul class="text-left size-12 list-inline list-separator">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar"></i>
                                    </a>
                                    29th Jan 2015
                                </li>
                                <!--li>
                                    <a href="#">
                                        <i class="fa fa-comments"></i>
                                        3
                                    </a>
                                </li-->
                            </ul>
                        </div>
                        <div class="img-hover">
                            <a href="#">
                                <img class="img-responsive" src="{{asset('demo/032.jpg')}}" alt="">
                            </a>

                            <h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
                            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                            <ul class="text-left size-12 list-inline list-separator">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar"></i>
                                    </a>
                                    29th Jan 2015
                                </li>
                            </ul>
                        </div>
                        <div class="img-hover">
                            <a href="#">
                                <img class="img-responsive" src="{{asset('demo/033.jpg')}}" alt="">
                            </a>

                            <h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
                            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                            <ul class="text-left size-12 list-inline list-separator">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar"></i>
                                    </a>
                                    29th Jan 2015
                                </li>
                            </ul>
                        </div>
                        <div class="img-hover">
                            <a href="#">
                                <img class="img-responsive" src="{{asset('demo/034.jpg')}}" alt="">
                            </a>

                            <h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
                            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                            <ul class="text-left size-12 list-inline list-separator">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar"></i>
                                    </a>
                                    29th Jan 2015
                                </li>
                            </ul>
                        </div>
                        <div class="img-hover">
                            <a href="#">
                                <img class="img-responsive" src="{{asset('demo/035.jpg')}}" alt="">
                            </a>

                            <h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
                            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                            <ul class="text-left size-12 list-inline list-separator">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar"></i>
                                    </a>
                                    29th Jan 2015
                                </li>
                            </ul>
                        </div>
                        <div class="img-hover">
                            <a href="#">
                                <img class="img-responsive" src="{{asset('demo/036.jpg')}}" alt="">
                            </a>

                            <h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
                            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                            <ul class="text-left size-12 list-inline list-separator">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar"></i>
                                    </a>
                                    29th Jan 2015
                                </li>
                            </ul>
                        </div>
                        <div class="img-hover">
                            <a href="#">
                                <img class="img-responsive" src="{{asset('demo/037.jpg')}}" alt="">
                            </a>

                            <h4 class="text-left margin-top-20"><a href="#">Lorem Ipsum Dolor</a></h4>
                            <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in.</p>
                            <ul class="text-left size-12 list-inline list-separator">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-calendar"></i>
                                    </a>
                                    29th Jan 2015
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </section>
            <!-- /RECENT NEWS -->

        </div>

        <!-- SCROLL TO TOP -->
        <a href="#" id="toTop"></a>
        <!-- /SCROLL TO TOP -->

        <!-- PRELOADER -->
        <div id="preloader">
            <div class="inner">
                <span class="loader"></span>
            </div>
        </div>
        <!-- /PRELOADER -->


        <footer class="page-footer font-small blue pt-4" id="footer">
            <div class="container">
                <!-- Footer Logo -->
                    <img class="footer-logo" src="{{ asset('images/buttons/logo3.jpg') }}" alt="" />

                    <!-- Contact Address -->
                    <address>
                        <ul class="list-unstyled">
                            <li class="footer-sprite address">
                                Dirección: Calle 22 # 2201 entre/ 41 y 43, municipio playa, localidad Ampliación Almendrares.
                            </li>
                            <li class="footer-sprite phone">
                                Teléfono: (+53) 72067364
                            </li>
                            <li class="footer-sprite email">
                                <a href="mailto:celass@mtss.gob.cu">correo-electrónico: celass@mtss.gob.cu</a>
                            </li>
                        </ul>
                    </address>
                    <!-- /Contact Address -->

                </div>
                <!-- /col #1 -->
                <div class="copyright">
                    <div class="container">

                        &copy; Todos los derechos reservados por, CELASS
                    </div>
                </div>

                </div>

            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script type="text/javascript">var plugin_path = '{{asset('js/plugins')}}/';</script>
        <script type="text/javascript" src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>

        <!-- REVOLUTION SLIDER -->
        <script type="text/javascript" src="{{asset('js/jquery.themepunch.tools.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/demo.revolution_slider.js')}}"></script>
    </div>
</body>
</html>
