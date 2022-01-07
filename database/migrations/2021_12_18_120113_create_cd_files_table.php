<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCdFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cdfiles', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 50);
            $table->string('subindice')->nullable();
            $table->string('indice')->nullable();
            $table->binary('documento');
            $table->string('descripcion')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->boolean('activo');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
        });
    }
         public function down()
    {
        Schema::dropIfExists('cdfiles');
    }
}
