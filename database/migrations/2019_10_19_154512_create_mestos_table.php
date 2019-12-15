<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mestos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45);
            $table->integer('krajinies_id')->unsigned();
            $table->foreign('krajinies_id') ->references('id')->on('krajinies');
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
        Schema::dropIfExists('mestos');
    }
}
