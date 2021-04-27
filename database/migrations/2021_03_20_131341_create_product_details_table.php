<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('sku');
            $table->string('nhan_hieu');        //nhãn hiệu
            $table->string('xuat_xu')->nullable();          //xuất sứ
            $table->string('hang_san_xuat')->nullable();    //hãng sản xuất
            $table->string('khung')->nullable();            //mã số khung
            $table->string('bao_hanh')->nullable();         //bảo hành
            $table->string('giay_chung_nhan')->nullable();  // giấy chứng nhận
            $table->string('kich_thuoc')->nullable();       //dài rộng
            $table->string('lop_truoc')->nullable();        //lốp trước
            $table->string('lop_sau')->nullable();          // lốp sau
            $table->string('mau_sac')->nullable();          // màu sắc
            $table->string('cong_suat')->nullable();        // công suất
            $table->string('dong_co')->nullable();
            $table->string('van_toc')->nullable();
            $table->string('ac_quy')->nullable();
            $table->string('thoi_gian_sac')->nullable();
            $table->string('trong_luong')->nullable();       //trọng lượng
            $table->string('den_xe')->nullable();            // đèn xe
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
        Schema::dropIfExists('product_details');
    }
}

