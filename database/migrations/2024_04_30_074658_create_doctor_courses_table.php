<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorCoursesTable extends Migration
{
    public function up()
    {
        Schema::create('doctor_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('doctor_id');
            $table->string('course');
            $table->integer('year');
            $table->timestamps();

            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
        });
    }

    public function dowёn()
    {
        Schema::dropIfExists('doctor_courses');
    }
}

