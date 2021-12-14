<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>themelock.com - Smarty - Multipurpose + Admin</title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <!--link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

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
    <div id="header" class="sticky shadow-after-3 clearfix">

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
                            <li class="dropdown active"><!-- HOME -->
                                <a class="dropdown" href="#">
                                    Inicio
                                </a>
                            </li>
                            <li class="dropdown"><!-- PAGES -->
                                <a class="dropdown" href="#">
                                    Contacto
                                </a>
                            </li>

                            <li class="dropdown mega-menu"><!-- SHORTCODES -->
                                <a class="dropdown" href="#">
                                    Cursos
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

                    <img src="{{asset('HTML/assets/images/1x1.png')}}" data-lazyload="{{asset('images/celass/img5.jpg')}}" alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat" />

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
                        <span class="weight-300">DEVELOPMENT / MARKETING / DESIGN / PHOTO</span>
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
                        WELCOME TO SMARTY
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

                    <div class="tp-caption customin ltl tp-resizeme"
                         data-x="center"
                         data-y="313"
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
                            <span>Purchase Smarty Now</span>
                        </a>
                    </div>

                </li>

                <li data-transition="fade" data-slotamount="14"  data-masterspeed="300" data-delay="10000">

                    <!-- COVER IMAGE -->
                    <img src="{{asset('assets/images/1x1.png')}}" data-lazyload="{{asset('images/celass/img4.jpg')}}" alt="" data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat" />

                    <div class="tp-caption lft boxshadow"
                         data-x="70"
                         data-y="90"
                         data-speed="900"
                         data-start="500"
                         data-easing="easeOutBack">
                    </div>

                    <div class="tp-caption sft large_bold_white"
                         data-x="750"
                         data-y="85"
                         data-speed="300"
                         data-start="1200"
                         data-easing="easeOutExpo">SMARTY
                    </div>

                    <div class="tp-caption lfb medium_light_white"
                         data-x="750"
                         data-y="200"
                         data-speed="300"
                         data-start="1400"
                         data-easing="easeOutExpo">&bull; Revolution Slider <span class="line-through">$14</span>
                    </div>

                    <div class="tp-caption lfb medium_light_white"
                         data-x="750"
                         data-y="234"
                         data-speed="300"
                         data-start="1700"
                         data-easing="easeOutExpo">&bull; Layer Slider <span class="line-through">$11</span>
                    </div>

                    <div class="tp-caption lfb medium_light_white"
                         data-x="750"
                         data-y="274"
                         data-speed="300"
                         data-start="2000"
                         data-easing="easeOutExpo">&bull; Tons Of Features
                    </div>

                    <div class="tp-caption lfb"
                         data-x="751"
                         data-y="370"
                         data-speed="300"
                         data-start="1600"
                         data-easing="easeOutExpo">
                        <a href="#purchase" class="btn btn-default btn-lg">
                            <span>PURCHASE SMARTY</span>
                        </a>
                    </div>

                </li>

            </ul>
            <div class="tp-bannertimer"></div>
        </div>
    </section>
    <!-- /REVOLUTION SLIDER -->

    <!-- INFO BAR -->
    <section class="info-bar info-bar-clean">
        <div class="container">

            <div class="row">

                <div class="col-sm-4">
                    <i class="glyphicon glyphicon-globe"></i>
                    <h3 class="text-blue">Carecteristica1</h3>
                    <p>blablablablabal</p>
                </div>

                <div class="col-sm-4">
                    <i class="glyphicon glyphicon-usd"></i>
                    <h3 class="text-blue">Carecteristica2</h3>
                    <p>blablablablabal</p>
                </div>

                <div class="col-sm-4">
                    <i class="glyphicon glyphicon-flag"></i>
                    <h3 class="text-blue">Carecteristica3</h3>
                    <p>blablablablabal</p>
                </div>

            </div>

        </div>
    </section>
    <!-- /INFO BAR -->

    <!-- WELCOME -->
    <section class="nopadding-bottom">
        <div class="container">
            <header class="text-center margin-bottom-40">
                <h1 class="weight-300">Bienvenido</h1>
                <h2 class="weight-300 letter-spacing-1 size-13"><span>Ministerio de Trabajo y Seguridad Social</span></h2>
            </header>

            <div class="text-center">
                <p class="lead">
                    El Ministerio de Trabajo y Seguridad Social es el Organismo de la Administración Central del Estado en virtud del Acuerdo No. 8332 del Consejo de Ministros de 23 de marzo del 2018, tiene la misión de proponer, dirigir y controlar la política del Estado y el Gobierno en materia de trabajo, seguridad y salud en el trabajo, seguridad social y prevención, asistencia y trabajo social.
                </p>

            </div>
        </div>
    </section>
    <!-- /WELCOME -->

    <section>
            <div class="container">

                <div id="portfolio" class="portfolio-nogutter">

                    <!--ul class="nav nav-pills mix-filter margin-bottom-60">
                        <li data-filter="all" class="filter active"><a href="#">All</a></li>
                        <li data-filter="development" class="filter"><a href="#">Development</a></li>
                        <li data-filter="photography" class="filter"><a href="#">Photography</a></li>
                        <li data-filter="design" class="filter"><a href="#">Design</a></li>
                    </ul-->


                    <div class="row mix-grid">
                        @foreach ($cursos as $curso )

                            <div class="col-md-3 col-sm-3 mix development"><!-- item -->

                                <div class="item-box">
                                    <figure>
										<span class="item-hover">
											<span class="overlay dark-5"></span>
											<span class="inner">

												<!-- lightbox -->
												<a class="ico-rounded lightbox" href="{{asset('uploads/cursos/'.$curso->img)}}" data-plugin-options='{"type":"image"}'>
													<span class="fa fa-plus size-20"></span>
												</a>

                                                <!-- details -->
												<a class="ico-rounded" href="{{$curso->url}}">
													<span class="glyphicon glyphicon-option-horizontal size-20"></span>
												</a>

											</span>
										</span>

                                        <img class="img-responsive" src="{{asset('uploads/cursos/'.$curso->img)}}" width="600" height="399" alt="">
                                    </figure>

                                    <div class="item-box-desc">
                                        <h3 class="text-blue">{{$curso->titulo}}</h3>
                                        <ul class="list-inline categories nomargin">
                                            <li><a href="/usuarios/{{$curso->user->id}}/show">{{$curso->user->name}}</a></li>
                                        </ul>
                                    </div>

                                </div>

                            </div>

                        @endforeach

                    </div>

                </div>

            </div>
        </section>


    <!-- PARALLAX -->
    <section class="parallax parallax-2" style="background-image: url('{{asset('HTML/assets/images/demo/1200x800/3-min.jpg')}}');">
        <div class="overlay dark-8"><!-- dark overlay [1 to 9 opacity] --></div>

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

    <!-- FOOTER -->
    <footer id="footer">
        <div class="container">

            <div class="row">

                <div class="col-md-3">
                    <!-- Footer Logo -->
                    <img class="footer-logo" src="{{asset('HTML/assets/images/logo-footer.png')}}" alt="" />

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
                                Phone: 1-800-565-2390
                            </li>
                            <li class="footer-sprite email">
                                <a href="mailto:support@yourname.com">support@yourname.com</a>
                            </li>
                        </ul>
                    </address>
                    <!-- /Contact Address -->

                </div>

                <div class="col-md-3">

                    <!-- Latest Blog Post -->
                    <h4 class="letter-spacing-1">LATEST NEWS</h4>
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
                    <h4 class="letter-spacing-1">EXPLORE SMARTY</h4>
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
                    <h4 class="letter-spacing-1">KEEP IN TOUCH</h4>
                    <p>Subscribe to Our Newsletter to get Important News &amp; Offers</p>

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

                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-twitter pull-left" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-gplus pull-left" data-toggle="tooltip" data-placement="top" title="Google plus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-linkedin pull-left" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>

                        <a href="#" class="social-icon social-icon-border social-rss pull-left" data-toggle="tooltip" data-placement="top" title="Rss">
                            <i class="icon-rss"></i>
                            <i class="icon-rss"></i>
                        </a>

                    </div>
                    <!-- /Social Icons -->

                </div>

            </div>

        </div>

        <div class="copyright">
            <div class="container">
                <ul class="pull-right nomargin list-inline mobile-block">
                    <li><a href="#">Terms &amp; Conditions</a></li>
                    <li>&bull;</li>
                    <li><a href="#">Privacy</a></li>
                </ul>
                &copy; All Rights Reserved, Company LTD
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


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

</body>
</html>