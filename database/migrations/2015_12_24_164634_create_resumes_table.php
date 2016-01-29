<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resumes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('title');
            $table->unsignedInteger('region_id')->index();
            $table->string('address')->nullable();
            $table->unsignedInteger('category_id')->index();
            $table->string('cover_letter')->nullable();
            $table->text('description');
            $table->string('profile_filename')->nullable();
            $table->string('linkedin_username')->nullable();
            $table->string('facebook_username')->nullable();
            $table->string('googleplus_username')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('website')->nullable();
            $table->string('cv');
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
        Schema::drop('resumes');
    }
}
