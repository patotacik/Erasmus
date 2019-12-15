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
            $table->text('obrazok');
            $table->text('obrazok2');
            $table->text('obrazok3');
            $table->text('ppt');
            $table->text('dokument');
            $table->tinyInteger('hodnotenie');
            $table->boolean('potvrdenie');
            $table->integer('users_id')->unsigned();
            $table->foreign('users_id') ->references('id')->on('users');
            $table->integer('podujatias_id')->unsigned();
            $table->foreign('podujatias_id') ->references('id')->on('podujatias');
            $table->integer('pocitadlo');
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
