<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCongtyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('congty', function (Blueprint $table) {
            $table->bigIncrements('MaHanghoa');
            $table->string('TenHang');
            $table->string('DonViTinh');
            $table->integer('Soluong');
            $table->integer('GiaNhap');
            $table->integer('GiaBan');
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
        Schema::dropIfExists('congty');
    }
}
