<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmodulsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submoduls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('smdls_id')->index()->unique();
            $table->integer('smdls_id_mdls')->index();
            $table->string('smdls_url',200);
            $table->string('smdls_patch',200);            
            $table->string('smdls_wordkey_modul_name',120);
            $table->string('smdls_paramt_name',120)->nullable();
            $table->integer('smdls_id_srcnav')->index()->nullable();            
            $table->timestamps();

            $table->foreign('smdls_id_mdls')
                  ->references('mdls_id')
                  ->on('moduls')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('smdls_id_srcnav')
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
        Schema::drop('submoduls');
    }
}
