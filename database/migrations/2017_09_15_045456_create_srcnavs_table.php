<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSrcnavsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('srcnavs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('srcnav_id')->index();
            $table->string('srcnav_url',200)->nullable();
            $table->string('srcnav_dir',200);
            $table->string('srcnav_filename',150);
            $table->integer('srcnav_filesize')->nullable();
            $table->string('srcnav_filesizetype',100)->nullable();
            $table->string('srcnav_fileformat',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('srcnavs');
    }
}
