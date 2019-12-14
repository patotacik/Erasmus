<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUniverzityvyzvyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('univerzityvyzvy', function (Blueprint $table) {
            $table->timestamps();
            $table->integer('vyzvy_id')->unsigned();
            $table->foreign('vyzvy_id') ->references('id')->on('vyzvies');
            $table->string('Pocet-miest',45);
            $table->integer('univerzity_id')->unsigned();
            $table->foreign('univerzity_id') ->references('id')->on('univerzity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('univerzityvyzvy');
    }
}
