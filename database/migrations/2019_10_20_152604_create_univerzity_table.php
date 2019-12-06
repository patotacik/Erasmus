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
        Schema::create('univerzity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nazov',45);
            $table->date('zmluva_od');
            $table->date('zmluva_do');
            $table->integer('mesto_id')->unsigned();
            $table->foreign('mesto_id') ->references('id')->on('mesto');
            $table->integer('krajiny_id')->unsigned();
            $table->foreign('krajiny_id') ->references('id')->on('krajiny');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('univerzity');
    }
}
