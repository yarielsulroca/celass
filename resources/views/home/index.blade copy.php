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
                    <h1 class="nomargin-bottom"> Cursos <span>vigentes</span> por nuestro Centro:</h1>
                    <h2 class="col-sm-10 col-sm-offset-1 nomargin-bottom weight-300 text-muted size-20">Usted puede disfrutar de los siguientes cursos</h2>
                </div>

            </div>
        </section>
        <!-- Welcome -->

        <!-- Portfolio -->
        <section>
            <div class="container">

                <div id="portfolio" class="portfolio-nogutter">

                                                            <div class="col-md-9 col-sm-9">

                                                                <div class="row mix-grid">

                                                                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/007.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/008.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>Evento 4</h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">hora y direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->


                                                                    <div class="col-md-3 col-sm-3 mix development"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/009.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/010.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>Evento 1</h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">hora y direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->


                                                                    <div class="col-md-3 col-sm-3 mix photography"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/011.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/012.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>Evento 21</h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">hora y direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->


                                                                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/013.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/014.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>Evento 7</h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">hora y direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->


                                                                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/015.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/016.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>Evento 12</h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">hora y direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->


                                                                    <div class="col-md-3 col-sm-3 mix development"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/017.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/018.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>Evento 43</h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">hora y direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->


                                                                    <div class="col-md-3 col-sm-3 mix photography"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/019.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/020.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>Evento 5</h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">hora y direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->


                                                                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/021.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/022.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>el loco soy yo</h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->


                                                                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/023.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/024.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>Evento </h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">hora y direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->


                                                                    <div class="col-md-3 col-sm-3 mix photography"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/025.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/026.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>Evento 22</h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">hora y direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->


                                                                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/027.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/028.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>Evento 7</h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">hora y direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->


                                                                    <div class="col-md-3 col-sm-3 mix design"><!-- item -->

                                                                        <div class="item-box">
                                                                            <figure>
                                                                                <span class="item-hover">
                                                                                    <span class="overlay dark-5"></span>
                                                                                    <span class="inner">

                                                                                        <!-- lightbox -->
                                                                                        <a class="ico-rounded lightbox" href="{{asset('demo/029.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                            <span class="fa fa-plus size-20"></span>
                                                                                        </a>

                                                                                        <!-- details -->
                                                                                        <a class="ico-rounded" href="#">
                                                                                            <span class="fa fa-align-justify size-20"></span>
                                                                                        </a>

                                                                                    </span>
                                                                                </span>
                                                                                <img class="img-responsive" src="{{asset('demo/030.jpg')}}" width="600" height="399" alt="">
                                                                            </figure>

                                                                            <div class="item-box-desc">
                                                                                <h3>Evento 14</h3>
                                                                                <ul class="list-inline categories nomargin">
                                                                                    <li><a href="#">hora y direccion</a></li>
                                                                                </ul>
                                                                            </div>

                                                                        </div>

                                                                    </div><!-- /item -->
                                                                    @if($curso->tipo_id > 6)
                                                                            <div class="col-md-3 col-sm-3 mix development"><!-- item -->
                                                                            @else
                                                                            <div class="col-md-3 col-sm-3 mix photography"><!-- item -->
                                                                     @endif
                                                                                <div class="item-box">
                                                                                    <figure>
                                                                                        <span class="item-hover">
                                                                                            <span class="overlay dark-5"></span>
                                                                                                <span class="inner">

                                                                                                <!-- lightbox -->
                                                                                                <a class="ico-rounded lightbox" href="{{asset('demo/027.jpg')}}" data-plugin-options='{"type":"image"}'>
                                                                                                    <span class="fa fa-plus size-20"></span>
                                                                                                </a>

                                                                                                <!-- details -->
                                                                                                <a class="ico-rounded" href="#">
                                                                                                <span class="fa fa-align-justify size-20"></span>
                                                                                                </a>

                                                                                                </span>
                                                                                        </span>
                                                                                            <img class="img-responsive" src="{{ asset(images/img_cursos/excel.jpg)}}" width="600" height="399" alt="">
                                                                                    </figure>

                                                                                    <div class="item-box-desc">
                                                                                        <h3>{{$curso->titulo }}</h3>
                                                                                        <ul class="list-inline categories nomargin">
                                                                                            <li><p>{{$curso->descripcion}}</p></li>
                                                                                        </ul>
                                                                                        <ul class="list-inline categories nomargin">
                                                                                            <li><a href="{{$curso->url}}">Ir al Curso</a></li>
                                                                                        </ul>
                                                                                    </div>

                                                                                </div>

                                                                            </div><!-- /item -->


                        </div>

                    </div>

                    <div class="col-md-3 col-sm-3">

                        <ul class="nav nav-pills mix-filter margin-bottom-60">
                            <li data-filter="all" class="filter active"><a href="#">Todos</a></li>
                            <li data-filter="development" class="filter"><a href="#">Superación de Posgrado:</a></li>
                            <li data-filter="photography" class="filter"><a href="#">Preparación</a></li>
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
        <!-- /Parallax -->

        <!-- Event -->
        <section id="events">
            <div class="container">

                <h3>Eventos cercanos / <span class="size-16 weight-400">requiren reservacion!</span></h3>

                <div class="row">

                    <div class="col-sm-4">

                        <h4><i class="fa-fw select-all fas"></i> Teatros</h4>

                        <div class="event-item">
                            <div class="event-date-wrapper">
                                <span class="event-date-day">02</span>
                                <span class="event-date-month">Abril</span>
                            </div>
                            <div class="event-content-wrapper">
                                <div class="event-content-inner-wrapper">
                                    <h3 class="event-title"><a href="#">Teatro Marti</a><br><br></h3>
                                    <div class="event-location">Ballet de cuba </div>
                                </div>
                                <div class="event-status-wrapper">
                                    <a href="#">Reservar</a>
                                </div>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date-wrapper">
                                <span class="event-date-day">05</span>
                                <span class="event-date-month">Abril</span>
                            </div>
                            <div class="event-content-wrapper">
                                <div class="event-content-inner-wrapper">
                                    <h3 class="event-title"><a href="#">Gran tratro de la habana</a></h3>
                                    <div class="event-location">El lago de los cisnes </div>
                                </div>
                                <div class="event-status-wrapper">
                                    <a href="#">Reservar</a>
                                </div>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date-wrapper">
                                <span class="event-date-day">11</span>
                                <span class="event-date-month">Abril</span>
                            </div>
                            <div class="event-content-wrapper">
                                <div class="event-content-inner-wrapper">
                                    <h3 class="event-title"><a href="#">TeatroX</a><br><br></h3>
                                    <div class="event-location">Obra me encanta</div>
                                </div>
                                <div class="event-status-wrapper">
                                    <a href="#">Reservar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-4">

                        <h4><i class="fa-fw select-all fas"></i> Cines</h4>

                        <div class="event-item">
                            <div class="event-date-wrapper">
                                <span class="event-date-day">08</span>
                                <span class="event-date-month">Abril</span>
                            </div>
                            <div class="event-content-wrapper">
                                <div class="event-content-inner-wrapper">
                                    <h3 class="event-title"><a href="#">Yara</a><br><br></h3>
                                    <div class="event-location">Colonial Line Arena </div>
                                </div>
                                <div class="event-status-wrapper">
                                    <a href="#">Reservar</a>
                                </div>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date-wrapper">
                                <span class="event-date-day">09</span>
                                <span class="event-date-month">Abril</span>
                            </div>
                            <div class="event-content-wrapper">
                                <div class="event-content-inner-wrapper">
                                    <h3 class="event-title"><a href="#">Acapulco</a><br><br></h3>
                                    <div class="event-location">Aloe Blacc </div>
                                </div>
                                <div class="event-status-wrapper">
                                    <a href="#">Reservar</a>
                                </div>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date-wrapper">
                                <span class="event-date-day">16</span>
                                <span class="event-date-month">Abril</span>
                            </div>
                            <div class="event-content-wrapper">
                                <div class="event-content-inner-wrapper">
                                    <h3 class="event-title"><a href="#">Mella</a><br><br></h3>
                                    <div class="event-location">El clasico</div>
                                </div>
                                <div class="event-status-wrapper">
                                    <a href="#">Reservar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-sm-4">

                        <h4><i class="fa-fw select-all fas"></i> Cabaret</h4>

                        <div class="event-item">
                            <div class="event-date-wrapper">
                                <span class="event-date-day">3</span>
                                <span class="event-date-month">Abril</span>
                            </div>
                            <div class="event-content-wrapper">
                                <div class="event-content-inner-wrapper">
                                    <h3 class="event-title"><a href="#">Salon Rosado</a><br><br></h3>
                                    <div class="event-location">Pancho amat </div>
                                </div>
                                <div class="event-status-wrapper">
                                    <a href="#">Reservar</a>
                                </div>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date-wrapper">
                                <span class="event-date-day">15</span>
                                <span class="event-date-month">Abril</span>
                            </div>
                            <div class="event-content-wrapper">
                                <div class="event-content-inner-wrapper">
                                    <h3 class="event-title"><a href="#">Gato tuerto</a><br><br></h3>
                                    <div class="event-location">Juan formel </div>
                                </div>
                                <div class="event-status-wrapper">
                                    <a href="#">Reservar</a>
                                </div>
                            </div>
                        </div>

                        <div class="event-item">
                            <div class="event-date-wrapper">
                                <span class="event-date-day">16</span>
                                <span class="event-date-month">Abril</span>
                            </div>
                            <div class="event-content-wrapper">
                                <div class="event-content-inner-wrapper">
                                    <h3 class="event-title"><a href="#">malecon</a><br><br></h3>
                                    <div class="event-location">dd el makul </div>
                                </div>
                                <div class="event-status-wrapper">
                                    <a href="#">Reservar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>


            </div>
        </section>
        <!-- /Event -->

        <!-- RECENT NEWS -->
        <section>
            <div class="container">

                <header class="text-center margin-bottom-60">
                    <h1 class="weight-300">Informate!! por donde vamos</h1>
                    <h2 class="weight-300 letter-spacing-1 size-13"><span>Actualizando la farandula</span></h2>
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

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <!-- Footer Logo -->
                    <img class="footer-logo" src="" alt="" />

                    <!-- Small Description -->
                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                    <!-- Contact Address -->
                    <address>
                        <ul class="list-unstyled">
                            <li class="footer-sprite address">
                                PO Box 21132<br>
                                Here Weare St, Melbourne<br>
                                Vivas 2355 Australia<br>
                            </li>
                            <li class="footer-sprite phone">
                                Telefono: 1-800-565-2390
                            </li>
                            <li class="footer-sprite email">
                                <a href="mailto:oeberroa86@gmail.com">oeberroa86@gmail.com</a>
                            </li>
                        </ul>
                    </address>
                    <!-- /Contact Address -->

                </div>

                <div class="col-md-3">

                    <!-- Latest Blog Post -->
                    <h4 class="letter-spacing-1">Ultimas Noticias</h4>
                    <ul class="footer-posts list-unstyled">
                        <li>
                            <a href="#">Donec sed odio dui. Nulla vitae elit libero, a pharetra augue</a>
                            <small>29 June 2015</small>
                        </li>
                        <li>
                            <a href="#">Nullam id dolor id nibh ultricies</a>
                            <small>29 June 2015</small>
                        </li>
                        <li>
                            <a href="#">Duis mollis, est non commodo luctus</a>
                            <small>29 June 2015</small>
                        </li>
                    </ul>
                    <!-- /Latest Blog Post -->

                </div>

                <div class="col-md-2">

                    <!-- Links -->
                    <h4 class="letter-spacing-1">Menu</h4>
                    <ul class="footer-links list-unstyled">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Our Clients</a></li>
                        <li><a href="#">Our Pricing</a></li>
                        <li><a href="#">Smarty Tour</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                    <!-- /Links -->

                </div>

                <div class="col-md-4">

                    <!-- Newsletter Form -->
                    <h4 class="letter-spacing-1">Mantenga el contacto</h4>
                    <p>Suscribete para estar al tanto de los eventos nuevos</p>

                    <form class="validate" action="php/newsletter.php" method="post" data-success="Subscribed! Thank you!" data-toastr-position="bottom-right">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" id="email" name="email" class="form-control required" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
                        </div>
                    </form>
                    <!-- /Newsletter Form -->

                    <!-- Social Icons -->
                    <div class="margin-top-20">
                        <a href="#" class="social-icon social-icon-border social-facebook pull-left" data-toggle="tooltip" data-placement="top" title="Facebook">

                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-facebook"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-twitter"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                            <i class="fa fa-google"></i>
                            <i class="fa fa-google"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <i class="fa fa-linkedin"></i>
                            <i class="fa fa-linkedin"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                            <i class="fa fa-rss"></i>
                            <i class="fa fa-rss"></i>
                        </a>

                    </div>
                    <!-- /Social Icons -->

                </div>

            </div>

        </div>

        <div class="copyright">
            <div class="container">
                <ul class="pull-right nomargin list-inline mobile-block">
                    <li><a href="#">Terminos &amp; Condiciones</a></li>
                    <li>&bull;</li>
                    <li><a href="#">Privacidad</a></li>
                </ul>
                &copy; Todos los derechos reservados, Eventos en Cuba
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

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
