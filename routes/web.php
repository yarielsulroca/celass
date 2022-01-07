<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\facades\Auth;
use App\Models\Cursos;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $cursos= Cursos::all();
    return view('inicio',compact('cursos'));
});

Auth::routes();


