<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UsuarioController;
use app\Http\Controllers\cdController;
use App\Models\User;


//ruta por defecto para home y HomeController
Route::get('/', function () {
    return redirect('inicio');
});
//Rutas estaticas No utenticables
Route::get('/inicio', [App\Http\Controllers\InicioController::class, 'index'])->name('inicio');
Route::get('/nosotros', [App\Http\Controllers\InicioController::class, 'nosotros'])->name('nosostros');
Route::get('/servicios', [App\Http\Controllers\InicioController::class, 'servicios'])->name('servicios');
Route::get('/descargas', [App\Http\Controllers\InicioController::class, 'descargas'])->name('descargas');
Route::get('/contacto', [App\Http\Controllers\InicioController::class, 'contacto'])->name('contacto');
Route::get('/pruebas',[App\Http\Controllers\InicioController::class, 'pruebas'])->name('pruebas');

// Rutas autenticables
Auth::routes();
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('cursos', CursoController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('cd', cdController::class);

