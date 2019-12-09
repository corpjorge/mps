<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOpcionalesToPrimSemProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prim_sem_programas', function (Blueprint $table) {
            //Migracion para MySQL
            //$table->longText('opcionales', 10000)->after('recordatorio')->nullable();
            //Migracion para SQL server
            $table->longText('opcionales', 'MAX')->after('recordatorio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('prim_sem_programas', function (Blueprint $table) {
            $table->dropColumn('opcionales');
        });
    }
}
