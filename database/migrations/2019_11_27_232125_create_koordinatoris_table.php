<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKoordinatorisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('koordinatoris', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('fakulta');
            $table->string('katedra');
            $table->string('telefonne cislo');
            $table->string('email');
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
        Schema::dropIfExists('koordinatoris');
    }
}
