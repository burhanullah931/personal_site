<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('name')->nullable();
            $table->mediumText('email')->nullable();
            $table->mediumText('designation')->nullable();
            $table->mediumText('linkedin')->nullable();
            $table->mediumText('website')->nullable();
            $table->smallinteger('rating')->nullable();
            $table->mediumText('review')->nullable();
            $table->mediumText('profile_pic')->nullable();
            $table->smallInteger('status')->default(0);
            $table->smallInteger('featured')->default(0);
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
        Schema::dropIfExists('reviews');
    }
}
