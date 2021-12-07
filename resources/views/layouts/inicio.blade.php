@extends('layouts.app')

@section('title', 'INICIO')

@section('content')
<!-- CONTENIDO -->
<!-- Quienes Somos -->
<div class="container" style="background: white;">
    <div class="container" style="margin-top:30px">
        <div class="row">
          <div class="col-sm-4">
            <h2><a href="/nosotros">Nuestro Centro</a></h2>
            <h5>¿Qué somos?</h5>
            <div class="fakeimg">
                <img src="{{ asset('images/buttons/celass1.gif') }}">
            </div>
            <p>
                Somo la Escuela Ramal del Ministerio del Tarabajo y de Seguridad Social
                 <a href="/nosotros" style="color:blue;font-size="20px;">(...)</a>
            </p>
<!-- /Quienes Somos -->
<!-- ENLACES -->
            <h2>Enlaces:</h2>
            <h5>Enlaces relacionados con nuestro Centro.</h5>
            <ul class="nav nav-pills flex-column">

                <li class="nav-item">
                <a class="nav-link" href="https://www.mtss.gob.cu/">
                    <img src="{{ asset('images/buttons/mtss.jpg') }}">
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="https://www.gacetaoficial.gob.cu/es">
                    <img src="{{ asset('images/buttons/gaceta.jpg') }}">
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="{{ asset('images/buttons/moodle2.jpg') }}">
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://cursad.jovenclub.cu/course/search.php?search=moodle">
                    <img src="{{ asset('images/buttons/moodle-jc.jpg') }}">
                </a>
              </li>

            </ul>
            <hr class="d-sm-none">
          </div>
<!-- /ENLACES -->
        <!-- CURSOS -->
          <div class="col-sm-8 col-lg-8 col-xl-8">
        <table class="table table-bordered ">
            <tr>
                <td class="table-bordered">
                    <!-- Recorre Todos los curos -->
                    @foreach ($cursos as $curso)
                        <div class="" style="background #dadada;">
                                <h2>{{ $curso->titulo }}</h2>
                                <h5>Inicio del Curso: {{$curso->fecha_inicio}} Activo hasta: {{$curso->fecha_fin}} </h5>
                                <div class="fakeimg">{{$curso->img}}</div>
                                <h6>Metodologo Principal:{{ $curso->user->name }}</h6>
                                <h6>Correo Del Metodologo: {{$curso->user->email}}</h6>
                                <p>{{ $curso->descripcion }}</p>
                                <a href="{{ $curso->url }}" style="color:blue;font-size="20px; >URL....click Aqui</a>
                                <br><br>
                                <!-- Este es para Colorear segun el estado Iniciado, En curso, Finalizado -->
                                @if ($curso->fecha_fin < $fecha2=date('Y-m-d' ))
                                    <h4 class="table-danger col-sm-3">Finalizado</h4>
                                        @elseif ( $curso->fecha_inicio >= $fecha2=date('Y-m-d' ))
                                            <h4 class="table-warning col-sm-3">No Iniciado</h4>
                                            @else
                                                <h4 class="table-success col-sm-3">En Curso</h4>
                                @endif
                                <!-- Fin Coloreado de estado -->
                        </div>
                    @endforeach
                    <!-- FIn recorrico de cursos -->
                </td>
            </tr>
        </table>

         <!-- CURSOS -->
        </div>
      </div>
</div>
<!-- CONTENIDO -->
@endsection
