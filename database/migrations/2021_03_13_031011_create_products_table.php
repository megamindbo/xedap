<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten_san_pham');
            $table->string('sku');
            $table->integer('category_id');
            $table->integer('so_luong');
            $table->integer('slug')->nullable();
            $table->decimal('gia_san_pham',20,2);
            $table->float('giam_gia')->nullable();
            $table->string('mo_ta')->nullable();
            $table->string('image')->nullable();
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
        Schema::dropIfExists('products');
    }
}
