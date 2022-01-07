@extends('adminlte::page')
@section('title', 'admin-usuarios')
@section('content')
   <div class="card">
        <div class="card-header">
            <h3>Editando a :  <span class=" alert-danger"> {{ $user->name }}</span></h3>

        </div>
        <div class="card-body">

           {!! Form::model($user, ['route'=>['usuarios.update',$user->id],'method'=>'PUT']) !!}
           @csrf
           @method('PUT')
           <div class="mb-3 col-4">
            {!! Form::label('name','Nombre y Apellidos:') !!}
            {!! Form::text('name', $user->name, ['class'=>'form-control']) !!}
            </div>

           <div class="mb-3 col-4">
               {!! Form::label('email','Correo_Electrónico:') !!}
               {!! Form::email('email', $user->email, ['class'=>'form-control']) !!}
           </div>

           <div class="mb-3 col-4">
            {!! Form::label('password','Contraseña:') !!}

            {!! Form::password('password', ['class'=>'form-control']) !!}

           </div>

           <div class="mb-3 col-4">
            {!! Form::label('role','Roles' , ['class'=>'form-control col-4']) !!}
                @foreach ($roles as $role)
                    <div class="col-4">
                            <label>
                                {!! Form::checkbox('roles[]',$role->id , null, ['class'=>'mr-1']) !!}
                                {{ $role->name }}
                            </label>
                    </div>
                @endforeach
            </div>

            {!! Form::submit('Salvar', ['class'=>'btn btn-outline-primary']) !!}
            <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
           {!! Form::close() !!}

        </div>
        <div class="card-footer"></div>
   </div>
@stop
