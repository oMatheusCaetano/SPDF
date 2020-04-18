<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvolvedResponsabilityTable extends Migration
{

    public function up()
    {
        Schema::create('involved_responsability', function (Blueprint $table) {
            $table->bigInteger('involved_id')->unsigned();
            $table->bigInteger('responsability_id')->unsigned();

            $table->foreign('responsability_id')->references('id')->on('responsabilities');
            $table->foreign('involved_id')->references('id')->on('involved');
        });
    }

    public function down()
    {
        Schema::dropIfExists('involved_responsability');
    }
}
