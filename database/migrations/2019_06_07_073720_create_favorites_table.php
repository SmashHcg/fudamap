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
            $table->bigInteger('user_id')->unsigned();
            $table->string('destinationName');  //终点位置名
            $table->string('departName');       //起始位置名
            $table->double('destinationLongitude');  //终点经度
            $table->double('destinationLaitude');       //终点纬度
            $table->double('departLongitude');  //起始经度
            $table->double('departLatitude');  //起始纬度
            $table->string('usingTime');  //使用时间
            $table->string('time');  //创建日期
            $table->string('vehicle');  //出行方式
            $table->string('distance');  //距离
            $table->timestamps();
            //外键约束
            $table->foreign('user_id')->references('id')->on('users');
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
