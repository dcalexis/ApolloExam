<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Breakdown extends Migration
{
    public function up()
    {
        Schema::create('breakdown', function (Blueprint $table) {
            $table->increments('id');
			$table->string('values');
			$table->unsignedInteger('random_id');
			$table->foreign('random_id')->references('id')->on('random')->onDelete('cascade');
			$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('breakdown');
    }
}
