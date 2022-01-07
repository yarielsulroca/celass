<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cursos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\TipoCurso;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Cursos::all();
        return view('admin\cursos\index',compact('cursos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipo_cursos= TipoCurso::all();
        $cursos= Cursos::all();
        return view('admin.cursos.create',compact('cursos', 'tipo_cursos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request):

        $new_curso= new Cursos();
        $new_curso->titulo= $request->get('titulo');
        $new_curso->descripcion= $request->get('descripcion');
        $new_curso->user_id= $request->get('user_id');
        $new_curso->tipo_id= $request->get('tipo_id');
        $new_curso->fecha_inicio= $request->get('fecha_inicio');
        $new_curso->fecha_fin= $request->get('fecha_fin');
        //El nuevo curso siempre tendra como valor inicial (1)=True; o sea activo Inactivo=(0)->falce
        $new_curso->activo= 1;
        //guardando UrL de la Imagen (nota antes de ejecutar esto poner en consola: php artisan storage :link)
        //con esto hacemos un link de la carpeta storage en la publik.
         //Guardar ImagenSeleccionada

         $request->validate([
            'img' => 'required|image|max:512'
        ]); // valida que sea una imagen de como maximo 512jb de tamaño

        $img_temp= $request->file('img')->store('public/cursosImg');
        $url= Storage::url($img_temp);
        $new_curso->img= $url;
        $new_curso->url= $request->get('url');

        //Guardo los datos del nuevo curso en la bace de datos Usando el metodo save()
        $new_curso->save();
        return redirect('cursos')->with('status','Su Curso ha sido publicado en la web correctamente.');
        else:
            return redirect('cursos')->with('status','No se almaceno la Publicación de su curso.');
        endif;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $curso= Cursos::find($id);
       return view('admin.cursos.show',compact('curso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $curso=Cursos::find($id);
        return view('admin.cursos.show',compact('curso'));
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
        if($request):
            $curso = Cursos::find($id);
            $curso->titulo= $request->get('titulo');
            $curso->descripcion= $request->get('descripcion');
            $curso->user_id= $request->get('user_id');
            $curso->tipo_id= $request->get('tipo_id');
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
            return redirect('cursos')->with('status','Se actualizo correctamente la informacion de su Curso');
        else:
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
        $curso= Cursos::find($id);
        $curso->delete();
        return redirect('cursos')->with('status','Se elimino La publicación del Curso correctamente');
    }
}
