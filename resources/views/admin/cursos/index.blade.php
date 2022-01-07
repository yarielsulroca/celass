@extends('adminlte::page')
@section('title', 'cursos_index')
@section('css')
<link rel="stylesheet" href="{{ asset('DataTables/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('DataTables/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('DataTables/css/responsive.bootstrap5.min.css') }}">
@stop

@section('content')

    <div class="card-header">
        <h2>Listado de Cursos: </h2>
    </div>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    <div class="card-body">

        <a href="{{ route('cursos.create') }}" class="btn btn-outline-success"><i class="fa fa-fw fa-plus-circle"></i> Curso</a>

        <table id="cursos" class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Metodologo</th>
                <th>Tipo</th>
                <th>Inicio</th>
                <th>Fin</th>
                <th>Imag</th>
                <th>Url</th>
                <th>Estado</th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
               @foreach ($cursos as $curso )
                <tr>
                    <td>{{ $curso->id }}</td>
                    <td>{{ $curso->titulo }}</td>
                    <td>{{$curso->descripcion}}</td>
                    <td>{{ $curso->user->name}}</td>
                    <td>{{ $curso->tipoCurso->tipo}}</td>
                    <td>{{ $curso->fecha_inicio }}</td>
                    <td>{{ $curso->fecha_fin }}</td>
                    <td><img class="img-responsive height-200" src="{{$curso->img}}" width="50" height="50" > </td>
                    <td>{{ $curso->url }}</td>
                    <td>
                        @if($curso->activo==1)
                            Activo
                            @else
                                Inactivo
                         @endif
                    </td>
                    <td>
                        <form action="{{ route('cursos.edit',$curso->id) }}" method="GET" class="col-1">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-outline-primary btn-sm">
                                <i class="fa fa-fw fa-edit"></i>
                            </button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('cursos.destroy',$curso->id) }}" method="POST" class="col-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="eliminar" class="btn btn-outline-danger btn-sm eliminar">
                                <i class=" fa fa-fw fa-trash" ></i>
                            </button>
                        </form>
                    </td>

                </tr>
               @endforeach
            </tbody>
        </table>


    </div> {{--  fin div.body  --}}

@stop

@section('js')
    <script src="{{ asset('DataTables/js/jquery-3.5.1.js') }}"></script>
    <script src="{{ asset('DataTables/js/jquery.dataTables.min.js') }} "></script>
    <script src="{{ asset('DataTables/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('DataTables/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('DataTables/js/responsive.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function()
        {
            $('#cursos').DataTable({
              "language": {
                "url": "{{ asset('DataTables/lan/es/Spanish.json') }}"

              }
            });
        });
    </script>
@stop
