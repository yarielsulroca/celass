<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuarios= User::orderBy('name', 'asc')->paginate(10);
        $cursos= Curso::OrderBy('id','desc')->paginate(10);
        return view('home')->with('cursos',$cursos)->with('usuarios',$usuarios);

    }

}
