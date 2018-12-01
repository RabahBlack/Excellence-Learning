<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupes', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('numG');
            $table->integer('nbEleves');
            $table->integer('capacite');
            $table->string('libFormation');
            $table->string('jour');
            $table->time('heureDeb');
            $table->time('heureFin');
            $table->foreign('libFormation')->references('libFormation')->on('formations');
            $table->foreign(['jour','heureDeb','heureFin'])->references(['jour','heureDeb','heureFin'])->on('creneaus');
            $table->primary(['libFormation','numG']);
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
        Schema::dropIfExists('groupes');
    }
}
