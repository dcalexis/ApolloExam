<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Random extends Migration
{
    public function up()
    {
        Schema::create('random', function (Blueprint $table) {
            $table->increments('id');
			$table->string('values');
			$table->integer('flag');
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('random');
    }
}
