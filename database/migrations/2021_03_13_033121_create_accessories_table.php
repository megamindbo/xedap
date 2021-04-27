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
            $table->string('pin')->nullable();
            $table->string('adapter')->nullable();
            $table->string('board')->nullable();
            $table->string('frames')->nullable();
            $table->string('basket')->nullable();
            $table->string('mirror')->nullable();
            $table->string('key')->nullable();
            $table->string('book_warranty')->nullable();
            $table->string('tire')->nullable();
            $table->string('headlight')->nullable();
            $table->string('front_brake')->nullable();
            $table->string('rear_brake')->nullable();
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
