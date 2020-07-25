<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id');
            $table->integer('employee_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->string('dob');
            $table->string('email');
            $table->string('nrc');
            $table->string('phone');
            $table->text('address');
            $table->string('religion');
            $table->string('race');
            $table->string('marital_status');
            $table->string('position');
            $table->string('expected_salary');
            $table->string('status')->default('request');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}
