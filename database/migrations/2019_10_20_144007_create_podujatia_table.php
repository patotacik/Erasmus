<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodujatiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podujatia', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Nazov',45);
            $table->date('datum');
            $table->string('Miesto',45);
            $table->integer('vyzvy_id')->unsigned();
            $table->foreign('vyzvy_id') ->references('id')->on('vyzvy');
            $table->integer('pouzivatelia_id')->unsigned();
            $table->foreign('pouzivatelia_id') ->references('id')->on('pouzivatelia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('podujatia');
    }
}
