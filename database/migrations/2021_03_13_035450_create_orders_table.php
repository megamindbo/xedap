<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('session_id')->nullable();
            $table->string('token')->nullable();
            $table->string('user_email')->nullable();
            $table->string('congty')->nullable();
            $table->string('quoc_gia')->nullable();
            $table->string('ten')->nullable();
            $table->string('dia_chi')->nullable();
            $table->string('thanh_pho')->nullable();
            $table->string('thi_tran')->nullable();
            $table->string('zip')->nullable();
            $table->string('phone')->nullable();
            $table->double('sub_total')->nullable();
            $table->double('grand_total')->nullable();
            $table->double('giam_gia')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('status')->nullable();
            $table->string('flag')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
