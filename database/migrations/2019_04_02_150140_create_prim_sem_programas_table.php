<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimSemProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prim_sem_programas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('codigo');
            if (env('DB_CONNECTION') == 'mysql')
            {
             $table->string('descripcion', 10000)->nullable();
            }
            else
            {
              $table->string('descripcion','MAX')->nullable();
            }
            $table->integer('creditos')->nullable();
            $table->string('web')->nullable();
            $table->string('coordinador')->nullable();
            $table->string('correo')->nullable();
            $table->string('telefono')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prim_sem_programas');
    }
}
