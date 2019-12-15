<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVyzvisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vyzvis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Typ',45);
            $table->text('detail');
            $table->timestamps();
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
        Schema::dropIfExists('vyzvis');
    }
}
