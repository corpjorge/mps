<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrimSemGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prim_sem_grupos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->biginteger('prim_sem_programa_id')->unsigned();
            $table->foreign('prim_sem_programa_id')->references('id')->on('prim_sem_programas');
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
        Schema::dropIfExists('prim_sem_grupos');
    }
}
