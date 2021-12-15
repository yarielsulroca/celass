<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class cdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cd_files = File::all();
        return view('cd.create')->with('cd_files',$cd_files);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cd_temp= File::all();
        $cd_last= $cd_temp->last();
        $new_id= $cd_last->id + 1;
        // creando nuevo CDfile()
        $new_cd= new File();
        $new_cd= $new_id;
        $new_cd->titulo= $request->get('titulo');
        $new_cd->activo= $request->get('activo');
         //guardando UrL de la Imagen (nota antes de ejecutar esto poner en consola: php artisan storage:link)
        //con esto hacemos un link de la carpeta storage en la publik.
         //Guardar ImagenSeleccionada
         $cd_temp= $request->file('url')->store('public/cdFile'); // guardo la ruta fica dode se va a almacenar el file tipo CD
         $url= Storage::url($cd_temp); //Al maceno el file que esta en $request con el metodo Storage:: en la direcion definida
         $new_cd->url= $url; // almaceno en la base de datos la URL fisica donde se almaceno el fichero con su nombre.
         $new_cd->save();
            //Despues de almacenado me dirijo a home vista que contiene la interfas administrador del sistema
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
        $cd_file= File::find($id);
        return view('cd.show')->with('cd_file',$cd_file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cd_file= File::find($id);
        return view('cd.edit')->with('cd_file',$cd_file);
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
         $cd_file= File::find($id); //busco el cd que tenga ese id en la base de datos
            if($request->get('activo') == $cd_file->activo):

            else:
                $cd_file->activo= $request->get('activo');
            endif;
            // para guardar la nueva Url del cd_file Primero compuebo que viene un file anexo en la $request
            if($request->hasFile('url')):

                $cd_temp= $request->file('url')->store('public/cdFile');
                $url= Storage::url($cd_temp);
                $cd_file->url= $url;
            else:
                $cd_file->url = $cd_file->url;
            endif;
            // Fin del guardado de la URL de Cd_file

            if($cd_file->titulo == $request->get('titulo')):
            else:
                $cd_file->titulo= $request->get('titulo');
            endif;
                $cd_file->save();
                return redirect('/home');
        else:
            return redirect('/home');
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
        $cd_file= File::find($id);
        $cd_file->delete();
        return redirect('/home');
    }
}
