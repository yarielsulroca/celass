<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UsuariosController;
use App\Http\Controllers\Admin\CursosController;
use App\Http\Controllers\Admin\CdFilesController;



Route::get('admin.logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('admin.index',[HomeController::class,'index'])->name('home');
//Route::resource('usuarios',UsuariosController::class)->except('show');

/* Rutas para usuariosController */
Route::get('usuarios',[UsuariosController::class,'index'])->name('usuarios');
Route::get('usuarios/create',[UsuariosController::class,'create'])->name('usuarios.create');
Route::post('change_password/{id}',[UsuariosController::class,'change_password'])->name('change_password');
Route::get('usuarios/show',[UsuariosController::class,'show'])->name('usuarios.show');
Route::get('usuarios/{id}/edit',[UsuariosController::class,'edit'])->name('usuarios.edit');
Route::delete('usuarios/{id}',[UsuariosController::class,'destroy'])->name('usuarios.destroy');
Route::put('usuarios/{id}',[UsuariosController::class,'update'])->name('usuarios.update');
Route::post('usuarios',[UsuariosController::class,'store'])->name('usuarios.store');



Route::resource('cursos',CursosController::class);

Route::resource('cdfiles',CdFilesController::class);




