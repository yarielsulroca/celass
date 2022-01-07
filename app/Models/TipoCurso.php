<?php

namespace App\Models;
use App\Models\Curso;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCurso extends Model
{
   protected $table = "tipos_cursos";

   public $timestamps = false;

   protected $fillable = [
    'tipo'
];
// Relacion de 1 a muchos ( un tipo de curso puede contener varios cursos)
public function cursos()
	{
		return $this->hasMany(Curso::class);
	}
}
