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

            <div class="card-group">
                @foreach ($cursos as $curso)
                <div class="card">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">{{ $curso->tipoCurso->tipo }}</h5>
                    <h6 class="card-title">{{ $curso->titulo }}</h6>
                    <p class="card-text">{{ $curso->descripcion }}.</p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted"><a href="{{ $curso->url }}">Ir al Curso</a></small>
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
