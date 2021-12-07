<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Curso extends Model
{
    protected $table = 'cursos';

   public $timestamps = false;

    protected $fillable = [
        'titulo',
        'descripcion',
        'img',
        'user_id',
        'fecha_inicio',
        'fecha_fin',
        'activo',
        'url'
    ];

    //Relacion de 1 a muchos inversa
    public function user()
	{
		return $this->belongsTo('App\Models\User');
	}

}
