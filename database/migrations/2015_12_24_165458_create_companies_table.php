<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index();
            $table->string('name');
            $table->string('slogan')->nullable();
            $table->text('description')->nullable();
            $table->string('video_url')->nullable();
            $table->string('website')->nullable();
            $table->string('linkedin_username')->nullable();
            $table->string('facebook_username')->nullable();
            $table->string('googleplus_username')->nullable();
            $table->string('twitter_username')->nullable();
            $table->string('logo_filename')->nullable();
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
        Schema::drop('companies');
    }
}
