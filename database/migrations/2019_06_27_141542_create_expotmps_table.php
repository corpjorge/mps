<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpotmpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expotmps', function (Blueprint $table) {
            $table->bigIncrements('id');
             $table->longText('nombre', 10000)->nullable();
             $table->longText('sobra', 10000)->nullable();
             $table->longText('codigo', 10000)->nullable();
             $table->longText('num', 10000)->nullable();
             $table->longText('credi', 10000)->nullable();            
             $table->longText('desc', 10000)->nullable();
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
        Schema::dropIfExists('expotmps');
    }
}
