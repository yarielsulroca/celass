<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CdFiles extends Model
{
    protected $table = 'cdfiles';

    public $timestamps = false;

    protected $fillable = [
        'titulo',
        'indice',
        'subindice',
        'user_id',
        'descripcion',
        'activo',
        'documento'
    ];
    //Relacion de 1 a muchos inversa
    public function user()
	{
		return $this->belongsTo('App\Models\User','user_id');
	}
}
