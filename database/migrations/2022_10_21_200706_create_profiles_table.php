<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
                $table->id();
                $table->bigInteger('profile_id')->unsigned(); 
                $table->string('profileName'); // ここを追加
                $table->string('sports'); 
                $table->string('team'); 
                $table->integer('number');
                $table->string('position');  
                $table->timestamps();
                // 外部キーの設定
                $table->foreign('profile_id')->references('user_id')->on('datas'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
};
