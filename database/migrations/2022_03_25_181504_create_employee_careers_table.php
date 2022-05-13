<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_careers', function (Blueprint $table) {
            $table->id();
            $table->string('career_level');
            $table->string('job_title');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('job_id')->references('id')->on('jobs');
            $table->string('skill1');
            $table->string('skill2');
            $table->string('skill3');
            $table->string('skill4');
            $table->string('skill5');
            $table->string('skill6')->nullable();
            $table->string('skill7')->nullable();
            $table->string('skill8')->nullable();
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
        Schema::dropIfExists('employee_careers');
    }
};
