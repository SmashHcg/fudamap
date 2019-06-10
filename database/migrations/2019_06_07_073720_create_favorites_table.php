<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavoritesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->bigIncrements('favorite_id');
            $table->string('user_name');  //用户账号
            $table->string('destinationName');  //终点位置名
            $table->string('departName');       //起始位置名
            $table->double('destinationLongitude');  //终点经度
            $table->double('destinationLatitude');       //终点纬度
            $table->double('departLongitude');  //起始经度
            $table->double('departLatitude');  //起始纬度
            $table->integer('usingTime');  //使用时间
            $table->string('time');  //创建日期
            $table->string('vehicle');  //出行方式
            $table->integer('distance');  //距离
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
        Schema::dropIfExists('favorites');
    }
}
