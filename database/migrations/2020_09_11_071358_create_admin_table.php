<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table) {
           $table->increments('id');
            $table->string('tendangnhap')->nullable();
            $table->string('matkhau')->nullable();     
            $table->string('hoten')->nullable(); 
            $table->string('gmail')->nullable();
            $table->string('sodienthoai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
