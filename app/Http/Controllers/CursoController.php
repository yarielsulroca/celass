<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\TipoCurso;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use PhpParser\Node\Stmt\Else_;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_cursos= TipoCurso::all();
       return view('cursos.create2')->with('tipos_cursos',$tipos_cursos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validacion de Imagen
        $request->validate([
            'img' => 'required|image|max:2048'
        ]);
        //incrementar Id automaticamente
        $cursos_temp= Curso::all();
        $curso_last= $cursos_temp->last();
        $new_id= $curso_last->id + 1;

        //Crea Nuevo Curso "Constructor de curso"
        $new_curso = new Curso();
        $new_curso->id = $new_id;
        $new_curso->titulo= $request->get('titulo');
        $new_curso->descripcion= $request->get('descripcion');
        $new_curso->user_id= $request->get('user_id');
        $new_curso->tipo_id= $request->get('tipo_id');
        $new_curso->fecha_inicio= $request->get('fecha_inicio');
        $new_curso->fecha_fin= $request->get('fecha_fin');
        //El nuevo curso siempre tendra como valor inicial (1)=True; o sea activo Inactivo=(0)->falce
        $new_curso->activo= 1;
        //guardando UrL de la Imagen (nota antes de ejecutar esto poner en consola: php artisan storage:link)
        //con esto hacemos un link de la carpeta storage en la publik.
         //Guardar ImagenSeleccionada
        $img_temp= $request->file('img')->store('public/cursosImg');
        $url= Storage::url($img_temp);
        $new_curso->img= $url;
        $new_curso->url= $request->get('url');
        //Guardo los datos del nuevo curso en la bace de datos Usando el metodo save()
        $new_curso->save();
       return redirect('/home');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curso= Curso::find($id);
        return view('cursos.show')->with('curso',$curso);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $tipos_cursos= TipoCurso::all();
       $curso= Curso::find($id);
       return view('cursos.edit')->with('curso',$curso)->with('tipos_cursos',$tipos_cursos);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $curso = Curso::find($id);
        $curso->titulo= $request->get('titulo');
        $curso->descripcion= $request->get('descripcion');
        $curso->user_id= $request->get('user_id');

        if($request->get('tipo_id')):
            $curso->tipo_id= $request->get('tipo_id');
        endif;

        $curso->fecha_inicio= $request->get('fecha_inicio');
        $curso->fecha_fin= $request->get('fecha_fin');
        //El nuevo curso siempre tendra como valor inicial (1)=True; o sea activo Inactivo=(0)->falce
        $curso->activo= $request->get('activo');
        //Evaluamos si se utilizo el botton para añadiir un nuevo archivo de imagen
        if($request->hasFile('img')):

            $img_temp= $request->file('img')->store('public/cursosImg');
            $url= Storage::url($img_temp);
            $curso->img= $url;

            $request->validate([
                'img' => 'required|image|max:512'
            ]); // valida que sea una imagen de como maximo 512jb de tamaño

        else:
               $curso->img = $curso->img;
        endif;
         if($request->get('url')):
            $curso->url= $request->get('url');
        endif;
         //Guardo los datos del nuevo curso en la bace de datos Usando el metodo save()
        $curso->save();
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curso= Curso::find($id);
        $curso->delete();
        return redirect('/home');
    }
}
