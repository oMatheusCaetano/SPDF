<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResponsabilitiesTable extends Migration
{

    public function up()
    {
        Schema::create('responsabilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reponsability');
            $table->bigInteger('involved_id')->unsigned();
            $table->bigInteger('company_id')->unsigned();

            $table->foreign('involved_id')->references('id')->on('involved');
            $table->foreign('company_id')->references('id')->on('companies');
        });
    }

    public function down()
    {
        Schema::dropIfExists('responsabilities');
    }
}
