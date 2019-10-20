<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuboryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subory', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('spravy_id')->unsigned();
            $table->foreign('spravy_id') ->references('id')->on('spravy');
            $table->string('Adresa',45);
            $table->string('Nazov',45);
            $table->integer('typsuboru_id')->unsigned();
            $table->foreign('typsuboru_id') ->references('id')->on('typsuboru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subory');
    }
}
