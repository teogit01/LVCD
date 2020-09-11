<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhieudangkyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieudangky', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten')->nullable();
            $table->string('ma')->nullable();     
            $table->string('bailam_ma')->nullable();
            $table->string('nguoidung_tendangnhap')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phieudangky');
    }
}
