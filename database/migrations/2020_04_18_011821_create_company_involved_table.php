<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyInvolvedTable extends Migration
{

    public function up()
    {
        Schema::create('company_involved', function (Blueprint $table) {
            $table->bigInteger('company_id')->unsigned();
            $table->bigInteger('involved_id')->unsigned();
            
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('involved_id')->references('id')->on('involved');
        });
    }

    public function down()
    {
        Schema::dropIfExists('company_involved');
    }
}
