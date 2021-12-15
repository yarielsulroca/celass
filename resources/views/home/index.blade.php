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
                            <li class="dropdown" id="contact">
                                <a class="dropdown text-red weight-800" href="#">
                                    CONTACTO
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
    <section id="slider" class="slider fullwidthbanner-container roundedcorners">

        <div class="fullwidthbanner" data-height="550" data-navigationStyle="">
            <ul class="hide">

                <!-- SLIDE  -->
                <li data-transition="random" data-slotamount="1" data-masterspeed="1000" data-saveperformance="off"  data-title="Slide">

                    <img src="{{asset('HTML/assets/images/1x1.png')}}" data-lazyload="{{asset('images/Celass/c2.jpg')}}" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />

                    <div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

                    <div class="tp-caption customin ltl tp-resizeme text_white"
                         data-x="center"
                         data-y="105"
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
                         data-y="155"
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
                        Bienvenido a CELASS
                    </div>

                    <div class="tp-caption customin ltl tp-resizeme small_light_white font-lato"
                         data-x="center"
                         data-y="245"
                         data-customin="x:0;y:150;z:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                         data-speed="800"
                         data-start="1400"
                         data-easing="easeOutQuad"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.01"
                         data-endelementdelay="0.1"
                         data-endspeed="1000"
                         data-endeasing="Power4.easeIn" style="z-index: 10; width: 100%; max-width: 750px; white-space: normal; text-align:center; font-size:20px;">
                        Fabulas definitiones ei pri per recteque hendrerit scriptorem in errem scribentur mel fastidii propriae philosophia cu mea.
                    </div>

                </li>

                <li data-transition="fade" data-slotamount="14"  data-masterspeed="300" data-delay="10000">

                    <!-- COVER IMAGE -->
                    <img src=" {{ asset('images/Celass/c4.jpg') }} " data-lazyload="{{ asset('images/Celass/c4.jpg') }}" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />


                    <div class="tp-caption sft large_bold_white"
                         data-x="75"
                         data-y="85"
                         data-speed="300"
                         data-start="1200"
                         data-easing="easeOutExpo">Acciones de capacitación
                    </div>

                    <div class="tp-caption lfb medium_light_white"
                         data-x="75"
                         data-y="200"
                         data-speed="300"
                         data-start="1400"
                         data-easing="easeOutExpo">superación profesional y formación académica de posgrado<span class="line-through"></span>
                    </div>

                    <div class="tp-caption lfb medium_light_white"
                         data-x="75"
                         data-y="234"
                         data-speed="300"
                         data-start="1700"
                         data-easing="easeOutExpo">con carácter nacional e internacional <span class="line-through"></span>
                    </div>


                </li><li data-transition="fade" data-slotamount="14"  data-masterspeed="300" data-delay="10000">

                    <!-- COVER IMAGE -->
                    <img src=" {{ asset('images/Celass/c3.jpg') }} " data-lazyload="{{ asset('images/Celass/c3.jpg') }}" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                    <div class="tp-caption sft large_bold_white"
                         data-x="750"
                         data-y="85"
                         data-speed="300"
                         data-start="1200"
                         data-easing="easeOutExpo">Servicios
                    </div>

                    <div class="tp-caption lfb medium_light_white"
                         data-x="150"
                         data-y="200"
                         data-speed="300"
                         data-start="1400"
                         data-easing="easeOutExpo">de consultorías y científico-técnicos<span class="line-through"></span>
                    </div>

                    <div class="tp-caption lfb medium_light_white"
                         data-x="150"
                         data-y="234"
                         data-speed="300"
                         data-start="1700"
                         data-easing="easeOutExpo">,que responden a necesidades del sector <span class="line-through"></span>
                    </div>

                    <div class="tp-caption lfb medium_light_white"
                         data-x="150"
                         data-y="274"
                         data-speed="300"
                         data-start="2000"
                         data-easing="easeOutExpo">mediante atención personalizada ...
                    </div>

                    <div class="tp-caption lfb medium_light_white"
                    data-x="150"
                    data-y="314"
                    data-speed="300"
                    data-start="2300"
                    data-easing="easeOutExpo">atraves correos electrónicos u otras vías
                    </div>


                </li>

            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </section>
    <!-- /REVOLUTION SLIDER -->


    <!-- WELCOME -->
    <section class="nopadding-bottom">
        <div class="" style="background-image: url({{ asset('images/backgrounds/azul4.jpg') }})">
            <header class="text-center margin-bottom-40">
                <h1 class="weight-300 text-red">Bienvenido a CELASS</h1>
                <h2 class="weight-300 letter-spacing-1 size-13" ><span >Centro de Estudios Laborales y de Seguridad Social</span></h2>
            </header>

            <div class="text-center">
                <p class="lead">
                   Somos una escuela ramal del ministerio del trabajo y seguridad social...
                </p>
            </div>

            <!-- FEATURED BOXES 3 -->
            <div class="row margin-bottom-30">

                <div class="col-md-offset-1 col-md-2 col-xs-6">
                    <div class="text-center">
                        <i class="ico-color text-red bg-white ico-lg ico-rounded ico-hover et-circle-compass"></i>
                        <br/>
                        <button type="button" class="btn btn-default bg-blue border-blue" data-toggle="tooltip" data-placement="bottom" title="Servicios científico-técnicos y consultorías que responden a necesidades del sector, mediante atención personalizada en el centro de información, correos electrónicos u otras vías.">Nombre servicio</button>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="text-center">
                        <i class="ico-color text-red bg-white ico-lg ico-rounded ico-hover et-tools"></i>
                        <br/>
                        <button type="button" class="btn btn-default bg-blue border-blue" data-toggle="tooltip" data-placement="bottom" title="Acciones de capacitación, superación profesional y formación académica de posgrado, con carácter nacional e internacional en correspondencia con las necesidades diagnosticadas a los directivos, reservas, expertos y especialistas del Ministerio y sus entidades adscriptas y subordinadas; así como de las direcciones de Trabajo provinciales y municipales, OSDE y OAS.">Nombre servicio</button>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="text-center">
                        <i class="ico-color text-red bg-white ico-lg ico-rounded ico-hover et-strategy"></i>
                        <br/>
                        <button type="button" class="btn btn-default bg-blue border-blue" data-toggle="tooltip" data-placement="bottom" title="Asesoramiento en materias de programas para el mejoramiento del desempeño laboral de los cuadros, reservas y trabajadores en general.">Nombre servicio</button>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="text-center">
                        <i class="ico-color text-red bg-white ico-lg ico-rounded ico-hover et-streetsign"></i>
                        <br/>
                        <button type="button" class="btn btn-default bg-blue border-blue" data-toggle="tooltip" data-placement="bottom" title="Actualización de CD en materia de legislación laboral, salarial y de trabajo social.">Nombre servicio</button>
                    </div>
                </div>
                <div class="col-md-2 col-xs-6">
                    <div class="text-center">
                        <i class="ico-color text-red bg-white ico-lg ico-rounded ico-hover et-trophy"></i>
                        <br/>
                        <button type="button" class="btn btn-default bg-blue border-blue" data-toggle="tooltip" data-placement="bottom" title="Asesoramiento y cooperación para el desarrollo de, jornadas y eventos científicos metodológicos, propios del sistema trabajo, que tributen al fortalecimiento del diseño o propuestas de políticas del ámbito laboral y de lo social.">Nombre servicio</button>
                    </div>
                </div>
            </div>
            <!-- /FEATURED BOXES 3 -->
        </div>
    </section>
    <!-- /WELCOME -->

    <!-- CURSOS -->
    <section class="info-bar info-bar-clean">
        <div class="container">

            <!--div id="portfolio" class="portfolio-nogutter">

                <ul class="nav nav-pills mix-filter margin-bottom-60">
                    <li data-filter="all" class="filter active"><a href="#">All</a></li>
                    <li data-filter="development" class="filter"><a href="#">Development</a></li>
                    <li data-filter="photography" class="filter"><a href="#">Photography</a></li>
                    <li data-filter="design" class="filter"><a href="#">Design</a></li>
                </ul>
            </div-->

            <div class="row margin-top-30">
                <header class="text-center">
                    <h1 style="font-size: 28px">CURSOS <span class="text-blue">On Line</span></h1>
                </header>
                @foreach ($cursos as $curso)
                <div class="col-sm-3">
                    <div>
                        <figure class="box-shadow-7">
                            <img class="img-responsive height-200" src="{{$curso->img}}">
                        </figure>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <figure class="box-shadow-6">
                                <img class="img-responsive pull-left" src="{{ asset('images/buttons/curso.jpg') }}" width="50" height="50" />
                            </figure>
                        </div>
                        <div class="col-md-8">
                            <div class="text-blue" style="font-size: 18px">{{ $curso->tipoCurso->tipo }}</div>
                            <div class="text-danger">{{ $curso->titulo }}</div>
                            <div class="">
                                Fecha:
                                <p class="text-green">{{ $curso->fecha_inicio }} / {{ $curso->fecha_fin }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        {!! Str::limit("$curso->descripcion", 90, ' ...') !!}
                        <p class="text-right"><a href="{{ $curso->url }}">Ir al curso</a></p>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- /CURSOs-->

    <!-- PARALLAX -->
    <section class="parallax parallax-2" style="background-image: url({{ asset('images/backgrounds/azul4.jpg') }})">
        <div class="overlay dark-3"><!-- dark overlay [1 to 9 opacity] --></div>

        <div class="container">

            <div class="text-center">
                <h3 class="nomargin">Redes Sociales</h3>
            </div>

            <ul class="margin-top-80 social-icons list-unstyled list-inline">
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-facebook"></i>
                        <h4>Facebook</h4>
                        <span>Be Our Friend</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-twitter"></i>
                        <h4>Twitter</h4>
                        <span>Follow Us</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-youtube"></i>
                        <h4>Youtube</h4>
                        <span>Our Videos</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-instagram"></i>
                        <h4>Instagram</h4>
                        <span>See Our Images</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-linkedin"></i>
                        <h4>Linkedin</h4>
                        <span>Check Our Identity</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="#">
                        <i class="fa fa-pinterest"></i>
                        <h4>Pinterest</h4>
                        <span>Visual Discovery</span>
                    </a>
                </li>
            </ul>

        </div>

    </section>
    <!-- /PARALLAX -->

    <!-- COUNTER -->
    <section class="padding-xs alternate">
        <div class="container">

            <div class="row countTo-sm text-center">

                <div class="col-xs-6 col-sm-3 col-xs-6">
                    <i class="ico-lg ico-transparent et-megaphone"></i>
                    <div class="block size-40" style="color: #3498db;">
                        <strong class="countTo size-40" data-speed="3000">1303</strong>
                    </div>
                    <h3 class="size-15 margin-top-10 margin-bottom-0">Cursos</h3>
                </div>

                <div class="col-xs-6 col-sm-3 col-xs-6">
                    <i class="ico-lg ico-transparent et-chat"></i>
                    <div class="block size-40" style="color: #e74c3c;">
                        <strong class="countTo size-40" data-speed="3000">100</strong>
                    </div>
                    <h3 class="size-15 margin-top-10 margin-bottom-0">Profesores</h3>
                </div>

                <div class="col-xs-6 col-sm-3 col-xs-6">
                    <i class="ico-lg ico-transparent et-flag"></i>
                    <div class="block size-40" style="color: #16a085;">
                        <strong class="countTo size-40" data-speed="3000">77</strong>
                    </div>
                    <h3 class="size-15 margin-top-10 margin-bottom-0">Alumnos</h3>
                </div>

                <div class="col-xs-6 col-sm-3 col-xs-6">
                    <i class="ico-lg ico-transparent et-puzzle"></i>
                    <div class="block size-40" style="color: #9b59b6;">
                        <strong class="countTo size-40" data-speed="3000">9877</strong>
                    </div>
                    <h3 class="size-15 margin-top-10 margin-bottom-0">otro dato</h3>
                </div>

            </div>

        </div>
    </section>
    <!-- /COUNTER -->

    <!-- CONTACTO -->
    <section id="seccion_contact">
        <div id="map2" class="contact-over-map"></div>

        <div class="container">
            <div class="contact-over-box pull-right">

                <h3 class="size-20">¡Envíanos un mensaje o simplemente di  <strong><em>hola!</em></strong></h3>

                <form action="" method="post" enctype="multipart/form-data">
                    <fieldset>
                        <input type="hidden" name="action" value="contact_send" />

                        <div class="row">
                            <div class="col-md-12 margin-bottom-20">
                                <label for="contact:name">Nombre *</label>
                                <input required type="text" value="" class="form-control" name="contact[name][required]" id="contact:name">
                            </div>
                            <div class="col-md-12 margin-bottom-20">
                                <label for="contact:email"Correo *</label>
                                <input required type="email" value="" class="form-control" name="contact[email][required]" id="contact:email">
                            </div>
                            <div class="col-md-12 margin-bottom-20">
                                <label for="contact:phone">Telefono</label>
                                <input type="text" value="" class="form-control" name="contact[phone]" id="contact:phone">
                            </div>

                            <div class="col-md-12 margin-bottom-20">
                                <label for="contact:subject">Asunto *</label>
                                <input required type="text" value="" class="form-control" name="contact[subject][required]" id="contact:subject">
                            </div>

                            <div class="col-md-12 margin-bottom-20">
                                <label for="contact:message">Mensaje *</label>
                                <textarea required maxlength="10000" rows="6" class="form-control" name="contact[message]" id="contact:message"></textarea>
                            </div>
                        </div>

                    </fieldset>

                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Enviar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
    <!-- /CONTACTO -->

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


<!-- REVOLUTION SLIDER -->
<script type="text/javascript" src="{{asset('HTML/assets/plugins/slider.revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script type="text/javascript" src="{{asset('HTML/assets/plugins/slider.revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script type="text/javascript" src="{{asset('HTML/assets/js/view/demo.revolution_slider.js')}}"></script>

<!-- PAGELEVEL SCRIPTS -->
<script type="text/javascript" src="{{asset('HTML/assets/js/contact.js')}}"></script>

<!--
    GMAP.JS
    http://hpneo.github.io/gmaps/
-->
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="{{asset('HTML/assets/plugins/gmaps.js')}}"></script>
<script type="text/javascript">

    jQuery(document).ready(function(){

        /**
         @BASIC GOOGLE MAP
         **/
        var map2 = new GMaps({
            div: '#map2',
            lat: -12.043333,
            lng: -77.028333,
            scrollwheel: false
        });

        var marker = map2.addMarker({
            lat: -12.043333,
            lng: -77.028333,
            title: 'Company, Inc.'
        });

    });

</script>
</body>
</html>
