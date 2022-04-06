<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrails extends Migration
{
    public function up()
    {
        Schema::create('trails', function (Blueprint $table) {
            $table->id();
            $table->string('place');
            $table->double('lenght');
            $table->string('difficulty');
            $table->string('img');
            $table->string('description');
            //google map
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trails');
    }
}
