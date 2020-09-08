<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKithiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kithi', function (Blueprint $table) {
           $table->increments('id');
            $table->string('ten')->nullable();
            $table->string('ma')->nullable();      
        });
    }

    /**
     * Reverse the migrations.            $table->string('avatar')->nullable(); 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kithi');
    }
}
