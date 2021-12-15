@extends('cursos.template')
@section('content')
<h2>CREAR CURSO</h2>
<h3>Usuario: {{ Auth::user()->name; }}</h3>

<form action="/cursos/{{$curso->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <label for="" class="form-label">Selecione el Estado Del Curso (Activo/Inactivo)</label>
    <select class="form-control" name="activo" id="activo">
         <option value="1">Activo</option>
         <option value="0">Inactivo</option>
    </select>
        <br><br>
    <div class="mb-3">
    <label for="" class="form-label">Título</label>
    <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1" value="{{ $curso->titulo }}">
  </div>
  <div class="input-group">
      <br>
    <span class="input-group-text">Descripción</span>
    <textarea class="form-control" aria-label="With textarea" name="descripcion" id="descripcion" value="">{{ $curso->descripcion}}</textarea>
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
    <input id="fecha_inicio" name="fecha_inicio" type="date" step="any" class="form-control" tabindex="3" value="{{ $curso->fecha_inicio }}">
  </div>

  <br>

  <div class="mb-3">
    <label for="" class="form-label">Fecha_fin</label>
    <input id="fecha_fin" name="fecha_fin" type="date" step="any"  class="form-control" tabindex="3" value="{{ $curso->fecha_fin }}">
  </div>
<br>
  <label for="basic-url" class="form-label">URL del Curso </label>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon3">{{ $curso->url }}</span>
  <input type="text" class="form-control" id="url" name="url" aria-describedby="basic-addon3" value="{{ $curso->url }}">

</div>

 <br>

  <div class="mb-3">
    <label for="" class="form-label">Id del Metodologo en la tabla Usuarios:( {{ Auth::user()->name; }})</label>
    <input id="user_id" name="user_id" type="text" step="any" class="form-control" value="{{ Auth::user()->id; }}" tabindex="3">
  </div>
<br>
  <div class="col-3">
    <div class="custom-file">
        <label for="" class="form-label">Imagen Del Curso</label>
        <img src="{{ $curso->img }}" alt="">
        <label class="form-check-label">Seleccionar Otra Imagen</label>
        <input type="file" name="img" class="custom-file-input" id="img">
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
