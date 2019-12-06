<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodujatiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podujatias', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Nazov',45);
            $table->date('datum');
            $table->integer('mesto_id')->unsigned();
            $table->foreign('mesto_id') ->references('id')->on('mesto');
            $table->integer('univerzity_id')->unsigned();
            $table->foreign('univerzity_id') ->references('id')->on('univerzity');
            $table->integer('krajiny_id')->unsigned();
            $table->foreign('krajiny_id') ->references('id')->on('krajiny');
            $table->integer('vyzvy_id')->unsigned();
            $table->foreign('vyzvy_id') ->references('id')->on('vyzvy');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id') ->references('id')->on('users');
            $table->boolean('confirmed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('podujatias');
    }
}
