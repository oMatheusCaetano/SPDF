<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvolvedTable extends Migration
{

    public function up()
    {
        Schema::create('involved', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('cpf')->unique();
        });
    }

    public function down()
    {
        Schema::dropIfExists('involved');
    }
}
