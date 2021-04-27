<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccessoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accessories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sku');
            $table->string('pin')->nullable();
            $table->string('sac_pin')->nullable();      // sạc pin
            $table->string('ro_xe')->nullable();        // rổ xe
            $table->string('guong_xe')->nullable();       //gương xe
            $table->string('khoa')->nullable();
            $table->string('so_bao_hanh')->nullable();
            $table->string('lop_xe')->nullable();
            $table->string('den_pha')->nullable();
            $table->string('thang_truoc')->nullable();
            $table->string('thang_sau')->nullable();
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
        Schema::dropIfExists('accessories');
    }
}
