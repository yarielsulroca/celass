<html>
    <head>
        <title>CELASS - @yield('title')</title>
        <!-- MIS CSS-->
        <link href="{{asset('font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- CORE CSS -->
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/fonts/glyphicons.woff2')}}" rel="stylesheet" type="text/css" />

        <!-- THEME CSS -->
        <link href="{{asset('css/essentials.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/layout.css')}}" rel="stylesheet" type="text/css" />

        <!-- PAGE LEVEL SCRIPTS -->
        <link href="{{asset('css/header-1.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/blue.css')}}" rel="stylesheet" type="text/css" id="color_scheme" />

        <!-- REVOLUTION SLIDER -->
        <link href="{{asset('css/extralayers.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/settings.css')}}" rel="stylesheet" type="text/css" />
        <!-- /MIS CCSS -->
    </head>
    <body>
    <div class="container">
    <div class="row justify-content-center">
        <div class="container">
            <a href="logout" class="btn btn-amber">Salir</a>
            <div class="card">
                <div class="card-header"  style="color: blue; font-size: 30px; ">Administrar Web</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                 </div>
                 <h2 class="text-center" style="color: blue "> Administrar Usuarios</h3>
                 <a href="/usuarios/create" class="btn">Nuevo <i class="icon-plus-sign"></i></a>
                  <!-- Tabla Usuarios -->
                 <div class="justify-content-center ">
                    <table class="table table-bordered table-responsive justify-content-center col-auto">
                        <thead>

                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>correo</th>
                                <th>Editar/Borrar</th>
                            </tr>
                        </thead>
                        <tbody class="table-borderless table-primary">
                            @foreach ($usuarios as $usuario )
                                <tr>
                                    <th>{{$usuario->id}}</th>
                                    <th>{{$usuario->name}}</th>
                                    <th>{{$usuario->email}}</th>
                                    <th>
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
                  <!-- FIn Tabla Usuarios-->

                 <h2 class="text-center" style="color: blue "> Administrar Cusos</h3>

                   <!-- Tabla Curos-->
                   <a href="cursos/create" class="btn btn-outline-info col-2">Nuevo <i class="icon-plus-sign"></i></a>
                   <table class="table table-bordered table-responsive justify-content-center col-auto table-info table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Descripción</th>
                            <th>Tipo_Curso</th>
                            <th>Metodologo</th>
                            <th>Fecha_Inicio</th>
                            <th>Fecha_Fin</th>
                            <th>Estado</th>
                            <th>Url</th>
                            <th>Img</th>
                            <th>Editar/Borrar</th>
                        </tr>
                    </thead>
                    <tbody class="table-primary table-bordered table-striped" >
                        @foreach ($cursos as $curso )
                            <tr>
                                <th>{{ $curso->id }}</th>
                                <th>{{ $curso->titulo }}</th>
                                <th>{{ $curso->descripcion }}</th>
                                <th>{{ $curso->tipoCurso->tipo }}</th>
                                <th>{{ $curso->user->name }}</th>
                                <th>{{ $curso->fecha_inicio }}</th>
                                <th>{{ $curso->fecha_fin }}</th>
                                @if($curso->activo == 1)
                                    <th>Activo</th>
                                    @else
                                    <th>Inactivo</th>
                                @endif
                                <th>{{ $curso->url }}</th>

                                <th><img src="{{ asset($curso->img) }}" class="rounded mx-auto d-block" alt="..."></th>
                                <th>
                                    <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST">
                                        <a href="{{ route('cursos.edit',$curso->id) }}" class="btn btn-info"><i class="icon-edit"></i></a>
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
</div>
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

