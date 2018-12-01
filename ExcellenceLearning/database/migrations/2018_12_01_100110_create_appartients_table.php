<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppartientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartients', function (Blueprint $table) {
           // $table->increments('id');
            $table->integer('matricule');
            $table->string('libFormation');
            $table->integer('numG');
            $table->string('niveau');         
            $table->foreign('niveau')->references('niveau')->on('niveaux');
            $table->foreign(['libFormation','numG'])->references(['libFormation','numG'])->on('groupes');
            $table->primary(['matricule','libFormation','numG']);
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
        Schema::dropIfExists('appartients');
    }
}
