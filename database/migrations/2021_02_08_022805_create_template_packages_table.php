<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('template_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('template_category_id');
            $table->mediumText('title');
            $table->mediumText('sub_title');
            $table->string('slug', 200)->unique();
            $table->double('price', 8, 2);
            $table->smallInteger('package_type')->comment('0 is default for One time / 1 for monthly /	');
            $table->smallInteger('package_duration')->comment('Null for one time / 1 for monthly / 2 for 6 month / 3 for yearly	')->nullable();
            $table->smallInteger('featured')->default(0);
            $table->mediumText('status');
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
        Schema::dropIfExists('template_packages');
    }
}
