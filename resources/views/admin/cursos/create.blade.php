@extends('adminlte::page')

@section('title', 'cursos_create')
@section('content')
    <div class="card">
        <div class="card-header">
          <h1>Formulario para ingresar Nuevo Curso en el Sistema</h1>
          <h3>Usuario: {{ Auth::user()->name; }}</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="mb-3">
                <label for="" class="form-label">titulo</label>
                <input id="titulo" name="titulo" type="text" class="form-control col-5" tabindex="1">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Descripción</label>
                <textarea class="form-control col-5" id="descripcion" name= "descripcion" rows="3"></textarea>
              </div>

              <!-- Para Seleccionar El tipo de Curso al QUE pertenece -->
              <label for="" class="form-label">Tipo_Curso</label>
                <select class="form-control col-3" name="tipo_id" id="tipo_id">
                <option value="">Tipos_De_Curos</option>
                    <!-- Recorro los Todos los Tipos_cusos y me quedo con el ID pq es el valor de la etiqueta Value-->
                    @foreach( $tipo_cursos as $tipo)
                        <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
                    @endforeach
                </select>
            <!-- Fin SELECT -->

              <div class="mb-3">
                <label for="" class="form-label">Fecha_Inicio</label>
                <input id="fecha_inicio" name="fecha_inicio" type="date" step="any" class="form-control col-3" tabindex="3">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">Fecha_fin</label>
                <input id="fecha_fin" name="fecha_fin" type="date" step="any"  class="form-control col-3" tabindex="3">
              </div>
              <div class="mb-3">
                <label for="" class="form-label">URL</label>
                <input id="url" name="url" type="text" step="any" class="form-control col-6" tabindex="3">
              </div>

              <div class="mb-3">
                <label for="" class="form-label">Metodologo( {{ Auth::user()->name; }})</label>
                <input id="user_id" name="user_id" type="text" step="any" class="form-control col-1" value="{{ Auth::user()->id; }}" tabindex="3">
              </div>

              <div class="col-3">
                <label for="" class="form-label">Seleccione la Imagen</label>
                <input class="form-control" type="file" id="img" name="img">
                @error('img')
                <small class="text-danger" >{{ $message }}</small>
                @enderror
              </div>
              <a href="/cursos" class="btn btn-secondary" tabindex="5"><i class= "fa fa-fw fa-arrow-circle-left"></i> Cancelar</a>
              <button type="submit" class="btn btn-primary" tabindex="4"><i class= "fa fa-fw fa-save"></i> Guardar</button>
            </form>
        </div>
        <div class="card-footer">

        </div>
    </div>
@stop

