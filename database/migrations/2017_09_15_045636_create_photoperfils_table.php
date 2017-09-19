<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoperfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photoperfils', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pp_id')->index()->uinque();
            $table->string('pp_src_filename',120);
            $table->string('pp_src_url',120);
            $table->string('pp_src_dir',120);
            $table->string('pp_src_format_file',120);
            $table->integer('pp_id_datospersonales')->index();
            $table->timestamps();

            $table->foreign('pp_id_datospersonales')
                  ->references('dp_id')
                  ->on('datospersonales')
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
        Schema::drop('photoperfils');
    }
}
