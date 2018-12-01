<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCreneausTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('creneaus', function (Blueprint $table) {
           // $table->increments('id');
            $table->string('jour');
            $table->time('heureDeb');
            $table->time('heureFin');
            $table->string('salle');
            $table->primary(['jour','heureDeb','heureFin']);
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
        Schema::dropIfExists('creneaus');
    }
}
