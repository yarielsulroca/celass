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
          <div class="col-lg-auto col-md-auto col-sm-auto" >
              <i class="icon-login"></i>
            <h2 name="servicios" id="servicios">Cursos Online</h2>
            @foreach ($cursos as $curso)
            <div class="card mb-8 " style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ $curso->img }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{ $curso->titulo }}</h3>
                            <h6>Fecha: {{ $curso->fecha_inicio }} hasta {{ $curso->fecha_fin }}</h6>
                            <p class="card-text">{{ $curso->descripcion }}.</p>

                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">Metodologo Principal:{{ $curso->user->name }}/li>
                            <li class="list-group-item">Correo Del Metodologo: {{$curso->user->email}}</li>
                            </ul>

                            <a href="{{ $curso->url }}" class="btn btn-primary">Curso</a>
                            <li class="list-group list-group-item"></li>
                            <!-- Este es para Colorear segun el estado Iniciado, En curso, Finalizado -->
                            @if ($curso->fecha_fin < $fecha2=date('Y-m-d' ))
                                <li class="table-danger col-5">Finalizado</li>
                                        @elseif ( $curso->fecha_inicio >= $fecha2=date('Y-m-d' ))
                                            <li class="table-warning col-5">No Iniciado</li>
                                                @else
                                                 <li class="table-success col-5">En Curso</li>
                            @endif
                            <!-- Fin Coloreado de estado -->

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

         <!-- CURSOS -->
        </div>
      </div>
</div>
<!-- CONTENIDO -->
@endsection
