<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\TerminableMiddleware;

class UsuariosController extends Controller
{


    /* Recordar ver el tema de la verificacion de la contraseña en el registro de Usuariso */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users= User::all();
        return view('admin.usuarios.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.register');
    }


    public function change_password (Request $request,$id)
    {

        $user= User::find($id);
        $user->password = bcrypt($request->get('password'));
        $user->save();
        return redirect('admin.index')->with('status','Se Cambio la contraserña Corectamente.');
    }

     /* funcion para ir a la vista que cambia
     la contraseña */
    public function show ()
    {
        return view('admin.usuarios.show')->with('id',Auth::user()->id);
    }


    public function edit($id)
    {
       $roles= Role::all();
       $user= User::find($id);
       return view('admin.usuarios.edit', compact('user','roles'));
    }


    public function store(Request $request)
    {
        $new_user= new User;
        $new_user->name= $request->get('name');
        $new_user->email= $request->get('email');
        $new_user->password= bcrypt($request->get('password'));
        $new_user->save();
        return redirect('usuarios')->with('status','Se Adcionó conrectamente el nuevo usuario al sistema');
    }


    public function update(Request $request, $id)
    {

        if($request):
                  /* Aqui busco el usuario que tiene esete id */
                  $user= User::find($id);

                  if ($request->get('roles')):
                  $user->roles()->sync($request->get('roles'));
                  endif;
                  /* Aqui le asigno los calores del $request de los demas paramatros */
                  if ( $request->get('name')):
                  $user->name = $request->get('name');
                  endif;

                  if ($request->get('email')):
                    $user->email = $request->get('email');
                  endif;
                  /* Verico que se escribio alguna contraseña */
                  if($request->get('password')):
                      $user->password = bcrypt($request->get('password'));
                  endif;
                  /* Salvo el usuario con los nuevos parametros */
                  $user->save();
                  /* Regreso a la vista */

                  return redirect('/usuarios')->with('status','Se Actualizó el Usuario correctamente.');

        else:
            return redirect('/usuarios')->with('status','No se le introdujo Información nueva al usuario');
        endif;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user= User::find($id);
       $user->delete();
       return redirect('usuarios')->with('status','Se Eliminó el Usuario correctamente');
    }
}
