<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //incrementar Id automaticamente
        $cursos_temp= Curso::all();
        $curso_last= $cursos_temp->last();
        $new_id= $curso_last->id + 1;
        //Crea Nuevo Curso
        $new_curso = new Curso();
        $new_curso->id = $new_id;
        $new_curso->titulo= $request->get('titulo');
        $new_curso->descripcion= $request->get('descripcion');
        $new_curso->img= $request->get('img');
        $new_curso->user_id= $request->get('user_id');
        $new_curso->fecha_inicio= $request->get('fecha_inicio');
        $new_curso->fecha_fin= $request->get('fecha_fin');
        //El nuevo curso siempre tendra como valor inicial (1)=True; o sea activo Inactivo=(0)->falce
        $new_curso->activo= 1;
        $new_curso->url= $request->get('url');
        //Guardo los datos del nuevo curso en la bace de datos Usando el metodo save()
        $new_curso->save();
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
