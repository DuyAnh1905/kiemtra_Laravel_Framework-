<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCongtyStatusIntoQuanlyhanghoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('quanlyHanghoa', function (Blueprint $table) {
            $table->unsignedBigInteger('hang_id');
$table->foreign('hang_id')->references('MaHanghoa')->on('congty');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('quanlyHanghoa', function (Blueprint $table) {
            $table->dropForeign(['hang_id']);
        });
    }
}
