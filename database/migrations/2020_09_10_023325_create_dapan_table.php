<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dapan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ma')->nullable();
            $table->string('ten')->nullable(); 
            $table->string('noidung')->nullable(); 
            $table->string('cauhoi_ma')->nullable();            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dapan');
    }
}
