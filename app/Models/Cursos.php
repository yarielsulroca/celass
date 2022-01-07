<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Cursos extends Model
{
    protected $table = 'cursos';

   public $timestamps = false;

    protected $fillable = [
        'titulo',
        'descripcion',
        'img',
        'user_id',
        'tipo_id',
        'fecha_inicio',
        'fecha_fin',
        'activo',
        'url'
    ];

    //Relacion de 1 a muchos inversa
    public function user()
	{
		return $this->belongsTo('App\Models\User','user_id');
	}
        // relacion de 1 a muchos inversa (1 tipo de curso, puede estar en varios cursos)
    public function tipoCurso()
    {
    return $this->belongsTo('App\Models\TipoCurso','tipo_id');
    }

}
