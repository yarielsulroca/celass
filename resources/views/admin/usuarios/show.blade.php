@extends('adminlte::page')

@section('title', 'mostrar_usuario')
@section('css')
<style>
    .ocultar {
        display: none;
    }

    .mostrar {
        display: block;
    }
</style>
@stop
@section('content')

<div id="msg">

</div>



<!-- Mensajes de Verificación -->
<div id="error" class="alert alert-danger ocultar" role="alert">
    Las Contraseñas no coinciden, vuelve a intentar !
</div>
<div id="ok" class="alert alert-success ocultar" role="alert">
    Las Contraseñas coinciden ! (Procesando formulario ... )
</div>

<form id="miformulario" onsubmit="verificarPasswords();" action="/change_password/{{ Auth::user()->id }}" method="POST">
   @csrf
   @method('post')
    <div class="form-group">
        <label for="usuario">{{ Auth::user()->name }}</label>
    </div>
    <div class="form-group">
        <label for="password">Contraseña</label>
        <input type="password" class="form-control col-3" id="password" >
    </div>
    <div class="form-group">
        <label for="pass2">Vuelve a escribir la Contraseña</label>
        <input type="password" class="form-control col-3" id="pass2" >
    </div>

    <button type="submit" id="login" class="btn btn-primary">Cambiar</button>
</form>
@section('js')
    <script>
        function verificarPasswords() {

            // Ontenemos los valores de los campos de contraseñas
            pass1 = document.getElementById('password');
            pass2 = document.getElementById('pass2');

            // Verificamos si las constraseñas no coinciden
            if (pass1.value != pass2.value) {

                // Si las constraseñas no coinciden mostramos un mensaje
                document.getElementById("error").classList.add("mostrar");

                return false;
            } else {

                // Si las contraseñas coinciden ocultamos el mensaje de error
                document.getElementById("error").classList.remove("mostrar");

                // Mostramos un mensaje mencionando que las Contraseñas coinciden
                document.getElementById("ok").classList.remove("ocultar");

                // Desabilitamos el botón de login
                document.getElementById("login").disabled = true;

                // Refrescamos la página (Simulación de envío del formulario)
                setTimeout(function() {
                    location.reload();
                }, 3000);

                return true;
            }

        }
    </script>
@stop
@stop
