<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupProcedureTable extends Migration
{
    public function up()
    {
        Schema::create('group_procedure', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('procedure_id');
            $table->timestamps();

            $table->foreign('group_id')->references('id')->on('procedure_groups')->onDelete('cascade');
            $table->foreign('procedure_id')->references('id')->on('procedures')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('group_procedure');
    }
}

