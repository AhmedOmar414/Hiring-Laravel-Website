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
        Schema::create('job_offer', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_desc');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('career_level');
            $table->string('job_type');
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->string('experience_years');
            $table->string('skill1');
            $table->string('skill2');
            $table->string('skill3');
            $table->string('skill4');
            $table->string('skill5');
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
        Schema::dropIfExists('job_offer');
    }
};
