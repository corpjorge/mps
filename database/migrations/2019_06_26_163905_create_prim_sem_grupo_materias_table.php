<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimSemGrupoMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prim_sem_grupo_materias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->biginteger('prim_sem_grupo_id')->unsigned();
            $table->foreign('prim_sem_grupo_id')->references('id')->on('prim_sem_grupos');
            $table->biginteger('prim_sem_materia_id')->unsigned();
            $table->foreign('prim_sem_materia_id')->references('id')->on('prim_sem_materias');
            if (env('DB_CONNECTION') == 'mysql')
            {
              //Migracion para MySQL
             $table->string('descripcion', 10000)->nullable();
            }
            else
            {
              //Migracion para SQL server
              $table->string('descripcion','MAX')->nullable();
            }
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
        Schema::dropIfExists('prim_sem_grupo_materias');
    }
}
