<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVyzvyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vyzvies', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('Typ',45);
            $table->string('nazov_seminara',80);
            $table->string('miesto_konania',80);
            $table->time('cas_konanie');
            $table->date('datum_konania');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vyzvy');
    }
}
