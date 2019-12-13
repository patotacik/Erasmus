<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHodnoteniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hodnotenies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('Otazka_1');
            $table->text('Otazka_2');
            $table->text('Otazka_3');
            $table->text('Otazka_4');
            $table->tinyInteger('hodnotenie');
            $table->integer('pocitadlo');
            $table->boolean('potvrdenie');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id') ->references('id')->on('users');
            $table->integer('podujatia_id')->unsigned();
            $table->foreign('podujatia_id') ->references('id')->on('podujatia');
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
        Schema::dropIfExists('hodnotenies');
    }
}
