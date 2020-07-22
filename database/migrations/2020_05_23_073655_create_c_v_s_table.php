<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCVSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('c_v_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('gender');
            $table->string('date_of_birth');
            $table->string('email');
            $table->string('nrc');
            $table->string('phone_number');
            $table->string('religion');
            $table->string('race');
            $table->string('material_status');
            $table->string('applied_position');
            $table->string('professional_area');
            $table->string('total_experience');
            $table->string('education_university');
            $table->string('education_level');
            $table->string('edication_major');
            $table->string('past_experience_1_title')->nullable();
            $table->string('past_experience_1_company')->nullable();
            $table->string('past_experience_1_duration')->nullable();
            $table->string('past_experience_1_function')->nullable();
            $table->string('other_qualifications');
            $table->string('expected_salary');
            
            
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
        Schema::dropIfExists('c_v_s');
    }
}
