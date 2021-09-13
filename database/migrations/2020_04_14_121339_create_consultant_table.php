<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultantTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultant', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');

            $table->string('first_name')->nullable();
            $table->longText('slug')->nullable();
            $table->string('last_name')->nullable();
            $table->string('organization')->nullable();
            $table->string('hourly_rate')->nullable();
            $table->string('phone')->nullable();
            $table->integer('industry')->nullable();
            $table->longText('job_title')->nullable();
            $table->longText('summary')->nullable();
            $table->string('logo')->nullable()->default('noimage.png');

            $table->string('country')->nullable();
            $table->string('region')->nullable();
            $table->string('city')->nullable();
            $table->string('postcode')->nullable();
            $table->longText('full_address')->nullable();
            

            $table->string('experience')->nullable();
            $table->integer('age')->nullable();
            $table->string('gender')->nullable();
            $table->string('current_salary')->nullable();
            $table->string('expected_salary')->nullable();
            $table->string('rate')->nullable();
            // $table->string('website')->nullable();
            

            $table->longText('facebook')->nullable();
            $table->longText('twitter')->nullable();
            $table->longText('linkedin')->nullable();
            $table->longText('website')->nullable();
            $table->longText('youtube')->nullable();
            $table->longText('vimeo')->nullable();

            
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
        Schema::dropIfExists('consultant');
    }
}
