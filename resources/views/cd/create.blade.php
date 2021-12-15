@extends('cursos.template')
@section('content')
<h2>CREAR CURSO</h2>
<h3>Usuario: {{ Auth::user()->name; }}</h3>

<form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">titulo</label>
    <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Descripción</label>
    <textarea class="form-control" id="descripcion" name= "descripcion" rows="3"></textarea>
  </div>

  <!-- Para Seleccionar El tipo de Curso al QUE pertenece -->
  <label for="" class="form-label">Tipo_Curso</label>
    <select class="form-control" name="tipo_id" id="tipo_id">
    <option value="">Tipos_De_Curos</option>
        <!-- Recorro los Todos los Tipos_cusos y me quedo con el ID pq es el valor de la etiqueta Value-->
        @foreach( $tipos_cursos as $tipo)
            <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>

        @endforeach
    </select>
<!-- Fin SELECT -->

  <div class="mb-3">
    <label for="" class="form-label">Fecha_Inicio</label>
    <input id="fecha_inicio" name="fecha_inicio" type="date" step="any" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Fecha_fin</label>
    <input id="fecha_fin" name="fecha_fin" type="date" step="any"  class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">URL</label>
    <input id="url" name="url" type="text" step="any" class="form-control" tabindex="3">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">Metodologo( {{ Auth::user()->name; }})</label>
    <input id="user_id" name="user_id" type="text" step="any" class="form-control" value="{{ Auth::user()->id; }}" tabindex="3">
  </div>
<br><br>
  <div class="col-3">
    <div class="custom-file">
        <label for="" class="form-label">Imagen Del Curso</label>
        <input type="file" name="img" class="custom-file-input" id="img"  >
            @error('img')
            <small class="text-danger" >{{ $message }}</small>
            @enderror
        <label class="custom-file-label" for="img"></label>
    </div>
<br><br><br>
  <a href="/home" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>
@endsection
