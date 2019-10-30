<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNoteToPrimSemProgramasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('prim_sem_programas', function (Blueprint $table) {
            if (env('DB_CONNECTION') == 'mysql')
            {
              $table->longText('nota', 10000)->after('telefono')->nullable();
              $table->longText('recordatorio', 10000)->after('nota')->nullable();
            }
            else
            {
              $table->longText('nota', 'MAX')->after('telefono')->nullable();
              $table->longText('recordatorio', 'MAX')->after('nota')->nullable();
            }

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
            $table->dropColumn('nota');
            $table->dropColumn('recordatorio');
        });
    }
}
