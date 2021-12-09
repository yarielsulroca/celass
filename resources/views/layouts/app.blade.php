<html>
    <head>
        <title>CELASS - @yield('title')</title>
        <!-- MIS CSS-->
        <link rel="stylesheet" href="{{ asset('css/⁫misestilos.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/essentials.css') }}">
        <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
        <link rel="stylesheet" href="{{ asset('css/header-1.css') }}">
        <link rel="stylesheet" href="{{ asset('css/color_scheme/blue.css') }}">
        <link rel="stylesheet" href="{{ asset('css/extralayers.css') }}">
        <link rel="stylesheet" href="{{ asset('css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('css/animate.css')}}">


        <!-- /MIS CCSS -->
    </head>
    <body>

            <!-- BODY -->
           <div class="container">

            <!-- Banner-->
            <a href="{{ asset('/inicio')}}">
                <li class=" page-header">
                <img src="{{ asset('images/buttons/banner2.gif') }}" alt="" class="anner">
                </li>
            </a>
            <!-- /Banner-->
           </div>

          <div class="inicio">
          <!-- DIV NavBar -->
                  <div id="container col-md-12 col-sm-12 ">
          <!-- NavBar -->
                      @section('sidebar')
                      <nav class="navegacion container-fluid " id="navbarmenu">
                          <ul class="menu">
                              <li class="col-md-12 col-sm-12">
                                  <a href="{{ asset('/inicio')}}    ">
                                      <img src="{{ asset('images/buttons/black_home.jpg') }}" alt="" class="imagen">
                                      <span class="text-item">Inicio</span>
                                      <span class="down-item"></span>
                                  </a>
                              </li>

                              <li class="col-md-12 col-sm-12">
                                  <a href="/servicios">
                                      <img src="{{ asset('images/buttons/black_servicio.jpg') }}" alt="" class="imagen">
                                      <span class="text-item">Servicios</span>
                                      <span class="down-item"></span>
                                  </a>
                              </li>

                              <li class="col-md-12 col-sm-12">
                                  <a href="/descargas">
                                      <img src="{{ asset('images/buttons/black_descarga.png') }}" alt="" class="imagen">
                                      <span class="text-item">Descargas</span>
                                      <span class="down-item"></span>
                                  </a>
                              </li>

                              <li class="col-md-12 col-sm-12">
                                  <a href="contacto">
                                      <img src="{{ asset('images/buttons/black_contacto.jpg') }}" alt="" class="imagen">
                                      <span class="text-item">Contacto</span>
                                      <span class="down-item"></span>
                                  </a>
                              </li>
                          </ul>
                      </nav>
              <!-- /NavBar -->
                      @show
                  </div>
           <!-- /DIV NavBar -->
           <!-- Contenido -->
           <div class="container">
              @yield('content')

          </div>
          <footer class="page-footer font-small blue pt-4">
              <div class="container">

                  <!-- col #1 -->
              <div class="col-md-6 col-sm-6">

                  <!-- Footer Logo -->
                  <img class="footer-logo" src="{{ asset('images/buttons/logo3.jpg') }}" alt="" />

                  <!-- Contact Address -->
                  <address>
                      <ul class="list-unstyled">
                          <li class="footer-sprite address"  style="color: white;">
                              Dirección: Calle 22 # 2201 entre/ 41 y 43, municipio playa, localidad Ampliación Almendrares.
                          </li>
                          <li class="footer-sprite phone"  style="color: white;">
                              Teléfono: (+53) 72067364
                          </li>
                          <li class="footer-sprite email">
                              <a href="mailto:celass@mtss.gob.cu"  style="color: white;">correo-electrónico: celass@mtss.gob.cu</a>
                          </li>
                      </ul>
                  </address>
                  <!-- /Contact Address -->

              </div>
              <!-- /col #1 -->
              <div class="copyright">
                  <div class="container"  style="color: white;">

                      &copy; Todos los derechos reservados por, CELASS
                  </div>
              </div>

              </div>
          </footer>

           <!-- /Contenido -->
          </div>
          <!-- /BODY -->
          <!-- Scripts -->
          <script type="text/javascript" src="{{ asset('js/jquery/jquery-2.1.4.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
          <script type="text/javascript" src="{{ asset('js/styleswitcher/styleswitcher.js') }}"></script>
          <script type="text/javascript" src="{{ asset('js/slider.revolution/js/jquery.themepunch.tools.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('js/slider.revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
          <script type="text/javascript" src="{{ asset('js/view/demo.revolution_slider.js') }}"></script>
          <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
          <!-- /Scripts -->
    </body>
</html>
