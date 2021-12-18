@extends('cursos.template')
@section('content')
    <div class="panel-heading panel-heading-transparent">
        <h2 class="panel-title">Editar Curso</h2>
    </div>
    <div class="panel-body">

        <form class="validate" action="/cursos/{{$curso->id}}" method="post" enctype="multipart/form-data" novalidate="novalidate">
            @csrf
            @method('PUT')
            <fieldset>
                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6">
                            <label>Selecione el Estado Del Curso (Activo/Inactivo)</label>
                            <select class="form-control" name="activo" id="activo">
                                <option value="1">Activo</option>
                                <option value="0">Inactivo</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label>Titulo</label>
                            <input id="titulo" name="titulo" type="text" class="form-control" tabindex="1" value="{{ $curso->titulo }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6">
                            <label>Descripción</label>
                            <textarea class="form-control" aria-label="With textarea" name="descripcion" id="descripcion" value="">{{ $curso->descripcion}}</textarea>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label>Tipo_Curso</label>
                            <select class="form-control" name="tipo_id" id="tipo_id">
                                <option value="">Tipos_De_Curos</option>
                                <!-- Recorro los Todos los Tipos_cusos y me quedo con el ID pq es el valor de la etiqueta Value-->
                                @foreach( $tipos_cursos as $tipo)
                                    <option value="{{$tipo->id}}">{{$tipo->tipo}}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>



                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6">
                            <label for="" class="form-label">Fecha_fin</label>
                            <input id="fecha_fin" name="fecha_fin" type="date" step="any"  class="form-control" tabindex="3" value="{{ $curso->fecha_fin }}">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="" class="form-label">Fecha_Inicio</label>
                            <input id="fecha_inicio" name="fecha_inicio" type="date" step="any" class="form-control" tabindex="3" value="{{ $curso->fecha_inicio }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-12 col-sm-12">
                            <label for="" class="form-label">Url del curso</label>
                            <span class="input-group-text" id="basic-addon3">{{ $curso->url }}</span>
                            <input type="text" class="form-control" id="url" name="url" aria-describedby="basic-addon3" value="{{ $curso->url }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6">
                            <label for="" class="form-label">Id del Metodologo en la tabla Usuarios:( {{ Auth::user()->name }})</label>
                            <input id="user_id" name="user_id" type="text" step="any" class="form-control" value="{{ Auth::user()->id }}" tabindex="3">
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <label for="" class="form-label">Imagen Del Curso</label>
                            <img src="{{ $curso->img }}" alt="">
                            <label class="form-check-label">Seleccionar Otra Imagen</label>
                            <input type="file" name="img" class="custom-file-input" id="img">
                            @error('img')
                            <small class="text-danger" >{{ $message }}</small>
                            @enderror
                            <label class="custom-file-label" for="img"></label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="row">
                <div class="col-md-12">
                    <a href="/home" class="btn btn-secondary" tabindex="5">Cancelar</a>
                    <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
                </div>
            </div>

            <input type="hidden" name="is_ajax" value="true"></form>
    </div>
@endsection
