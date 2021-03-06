<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrails extends Migration
{
    public function up()
    {
        Schema::create('trails', function (Blueprint $table) {
            $table->increments('id');
            $table->string('place');
            $table->string('length');
            $table->string('difficulty');
            $table->string('img')->nullable()->default(null);
            $table->string('nationalpark')->nullable()->default(null);
            $table->string('description',500);
            $table->string('map',1500);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('trails');
    }
}
