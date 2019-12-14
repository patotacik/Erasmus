<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniverzitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('univerzities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazov',45);
            $table->date('zaciatok');
            $table->date('koniec');
            $table->integer('mestos_id')->unsigned();
            $table->foreign('mestos_id') ->references('id')->on('mestos');
            $table->integer('krajinies_id')->unsigned();
            $table->foreign('krajinies_id') ->references('id')->on('krajinies');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('univerzities');
    }
}
