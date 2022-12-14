<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('_first_name');
            $table->string('_last_name');
            $table->string('_email');
            $table->string('_nationality');
            $table->string('_country_code');
            $table->string('_mobile_number');
            $table->string('_dob');
            $table->string('_gender');
            $table->string('_last_academic_result');
            $table->string('_summary');
            $table->string('_preferred_study_destination');
            $table->string('_preferred_course_level');
            $table->string('_subject');
            $table->string('_language_certificate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_registrations');
    }
}
