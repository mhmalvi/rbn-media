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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('nationality');
            $table->integer('country_code');
            $table->string('mobile_number');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('preferred_study_destination');
            $table->string('preffered_course_level');
            $table->string('subject');
            $table->string('start_date');
            $table->string('language_certificate');
            $table->string('last_academic_result');
            $table->string('study_gap');
            $table->string('summary');
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
        Schema::dropIfExists('student_registrations');
    }
}
