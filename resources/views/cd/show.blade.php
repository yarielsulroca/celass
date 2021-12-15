<html>
    <head>
        <title>Show</title>
        <!-- CORE CSS -->
        <link href="{{asset('css/card.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <section class="wrapper">
            @foreach ($cursos as $curso )
            <div class="row">
               <div class="col-md-4">
                   <div class="card text-white card-has-bg click-col">
                       <img class="card-img d-none" src="{{ $curso->img }}" alt="Goverment Lorem Ipsum Sit Amet Consectetur dipisi?">
                      <div class="card-img-overlay d-flex flex-column">
                       <div class="card-body">
                          <h4 class="card-meta mb-2">{{ $curso->tipoCurso->tipo }}</h4>
                          <h4 class="card-title mt-0 "><a class="text-white" herf="{{ $curso->url }}">{{ $curso->titulo }}</a></h4>
                         <small><i class="far fa-clock-o"></i> Inicia: {{ $curso->fecha_inicio }}</small>
                         <br>
                         <small><i class="far fa-clock"></i>Termina: {{ $curso->fecha_fin }}</small>
                        </div>
                        <div class="card-footer">
                         <div class="media">
                <img class="mr-3 rounded-circle" src="{{ asset('images/buttons/logo.jpg') }}" alt="" style="max-width:50px">
                <div class="media-body">
                  <h6 class="my-0 text-white d-block"> Metodólogo: {{ $curso->user->name }}</h6>
                </div>
                </div>
                @endforeach
            </section>
        </div>


    </body>
</html>
