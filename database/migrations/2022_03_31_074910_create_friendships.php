<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendships extends Migration
{
    public function up()
    {
        Schema::create('friendships', function (Blueprint $table) {
            $table->bigInteger('friend_id')->unsigned()->index();
            $table->foreign('friend_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('friendships');
    }
}
