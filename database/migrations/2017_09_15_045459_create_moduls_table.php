<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moduls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('mdls_id')->index()->unique();
            $table->string('mdls_url',200);
            $table->string('mdls_patch',200)->nullable();            
            $table->string('mdls_wordkey_modul_name',120)->nullable();
            $table->string('mdls_paramt_name',120)->nullable();
            $table->integer('mdls_id_srcnav')->index()->nullanle();  
            $table->timestamps();

            $table->foreign('mdls_id_srcnav')
                  ->references('srcnav_id')
                  ->on('srcnavs')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('moduls');
    }
}
