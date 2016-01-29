<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->string('title');
            $table->string('address')->nullable();
            $table->unsignedInteger('region_id')->index();
            $table->unsignedTinyInteger('type')->default('0'); // 0: full-time, 1: part-time.
//            $table->unsignedInteger('category_id')->index(); // deprecated! since we'll use multi-cat.
            $table->text('description')->nullable();
            $table->string('apply')->nullable();
            $table->timestamp('expiration_date');
            $table->unsignedInteger('company_id')->index();
            // Other fields moved to companies table schema.
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jobs');
    }
}
