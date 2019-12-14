<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniverzityTable extends Migration
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
            $table->integer('mesto_id')->unsigned();
            $table->foreign('mesto_id') ->references('id')->on('mesto');
            $table->integer('krajinys_id')->unsigned();
            $table->foreign('krajinys_id') ->references('id')->on('krajinies');

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
