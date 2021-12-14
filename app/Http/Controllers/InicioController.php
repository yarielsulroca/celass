<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
class InicioController extends Controller
{
    //metodo index para ir al index del Inicio
    public function index()
    {
        $cursos= Curso::all();
       return view('home.index')->with('cursos',$cursos);
    }
    public function nosotros()
    {
        return view('layouts.nosotros');
    }
    public function servicios()
    {
       // return "Estoy en la vista Servicios";
       return view('layouts.servicios');
    }
    public function descargas()
    {
        //return "Estoy en la vista Descargas";
        return view('layouts.descargas');
    }
    public function contacto()
    {
        //return "Estoy en la vista Contactos";
        return view('layouts.contacto');
    }
    public function pruebas()
    {
        $cursos= Curso::all();
        return view('cursos.show')->with('cursos',$cursos);
    }
}
