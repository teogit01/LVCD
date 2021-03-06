<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDethiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dethi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten')->nullable();
            $table->string('ma')->nullable();     
            $table->string('mon_ma')->nullable();     
             
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dethi');
    }
}
