<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMyfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('myfiles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mf_id')->index()->unique();
            $table->integer('mf_id_dp')->index();
            $table->string('mf_url',120)->nullable();
            $table->string('mf_dirt',120);
            $table->string('mf_file_name',120);
            $table->string('mf_file_format',120);
            $table->timestamps();

            $table->foreign('mf_id_dp')
                  ->references('dp_id')
                  ->on('datospersonales')
                  ->deleteOn('cascade')
                  ->updateOn('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('myfiles');
    }
}
