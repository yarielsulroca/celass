<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CdFiles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CdFilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cd_files= CdFiles::all();
        return view('admin.cdfiles.index', compact('cd_files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cd_files= CdFiles::all();
        return view('admin.cdfiles.create', compact('cd_files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cd_files= CdFiles::all();
        $last_file= $cd_files->last();
        $new_id= $last_file->id + 1;
        /* Crenado el nuevo Cdfile */
        $new_file= new CdFiles();
        $new_file->activo= 1;
        $new_file->id= $new_id;
        $new_file->titulo= $request->get('titulo');
        $new_file->subindice= $request->get('subindice');
        $new_file->indice= $request->get('indice');
        $new_file->decripcion= $request->get('decripcion');
        $new_file->user_id= Auth::user()->id;
        $request->validate([
            'documento' => 'required|documento|max:4096'
        ]); // valida tamañó
        /* Para almacenar el documento en Strorage/app/public/cdFile/ */
        $file_temp= $request->file('documento')->store('public/CdFile');
        $url= Storage::url($file_temp);
        $new_file->documento= $url;
        /* fin */
        /* Salvo el curso con los valores enviados en el $request */
        $new_file->save();
        return redirect('cdfiles.index')->with('status','Se almacenó corectamente su docuento en el Sistema');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cd_files= CdFiles::find($id);
        return view('admin.cdfiles.show')->with('cd_files',$cd_files);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cd_files= CdFiles::find($id);
        return view('admin.cdfiles.edit', compact('cd_files'));
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
        $new_file= CdFiles::find($id);
        $new_file->activo= $request->get('activo');
        $new_file->titulo= $request->get('titulo');
        $new_file->subindice= $request->get('subindice');
        $new_file->indice= $request->get('indice');
        $new_file->decripcion= $request->get('decripcion');
        $new_file->user_id= Auth::user()->id;
        if($request->hasFile('documento')):
            $request->validate([
                'documento' => 'required|documento|max:4096'
            ]); // valida tamañó
            /* Para almacenar el documento en Strorage/app/public/cdFile/ */
            $file_temp= $request->file('documento')->store('public/CdFile');
            $url= Storage::url($file_temp);
            $new_file->documento= $url;
        endif;
        $new_file->save();

        return redirect('cdfiles.index')->with('status','Se Actualizó correctamente el documento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // queda programar que se elimine de la carpeta storage el documento
        $cd_file= CdFiles::find($id);
        $cd_file->delete();
        return redirect('cdfiles.index')->with('status','Se Eliminó correctamente el documento');
    }
}
