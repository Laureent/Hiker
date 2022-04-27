<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalparks extends Migration
{
    public function up()
    {
        Schema::create('nationalparks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('opening');
            $table->string('webpage');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nationalparks');
    }
}
