<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TipoCurso;

class TiposCursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoCurso::create(['tipo'=>'Posgrado']);
        TipoCurso::create(['tipo'=>'Doctorado']);
        TipoCurso::create(['tipo'=>'Maestria']);
        TipoCurso::create(['tipo'=>'Diplomado']);
        TipoCurso::create(['tipo'=>'Capacitacion']);
        
    }
}
