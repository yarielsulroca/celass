@extends('adminlte::page')
@section('title', 'admin-usuarios')
@section('css')
<link rel="stylesheet" href="{{ asset('DataTables/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('DataTables/css/dataTables.bootstrap5.min.css') }}">
<link rel="stylesheet" href="{{ asset('DataTables/css/responsive.bootstrap5.min.css') }}">
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <h1>Usuarios del Sisetma</h1>
    </div>
    <div class="card-body">
        <a href="/usuarios/create" class="btn btn-outline-success"><i class="fa fa-fw fa-plus-circle"></i> Usuario</a>

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif


        <table id="usuarios" class="table table-striped dt-responsive nowrap" style="width:100%">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th> Nombre</th>
                    <th> Correo </th>
                    <th> Roles </th>
                    <th> Editar </th>
                    <th> Eliminar </th>
                </tr>
            </thead>
            <tbody>
               @foreach ( $users as $user )
                <tr>
                    <th>&nbsp;{{ $user->id }}</th>
                    <th>&nbsp;{{ $user->name }}</th>
                    <th>&nbsp;{{ $user->email }}</th>
                    <th>
                        &nbsp;
                        {{--  Aqui itero el arreglo de roles imprimeindo el valor como un varchar y no el contenido de un arreglo  --}}
                        {{--  De lo contrario me imprimria em pantalla en ves del nombre Admin algo asi: ["Admin"]  --}}
                        @foreach ($user->getRoleNames() as $name )
                           {{ $name }}
                         @endforeach
                         &nbsp;
                    </th>
                    <th>

                        <form action="{{ route('usuarios.edit',$user->id) }}" method="GET" class="col-1">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-outline-primary btn-sm"><i class="fa fa-fw fa-edit"></i></button>
                        </form>

                    </th>
                    <th>

                        <form action="{{ route('usuarios.destroy',$user->id) }}" method="POST" class="col-1">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="eliminar" class="btn btn-outline-danger btn-sm eliminar"><i class="fa fa-fw fa-trash"></i></button>
                        </form>

                    </th>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

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
            $('#usuarios').DataTable({
              "language": {
                "url": "{{ asset('DataTables/lan/es/Spanish.json') }}"

              }
            });
        });
    </script>
@stop
