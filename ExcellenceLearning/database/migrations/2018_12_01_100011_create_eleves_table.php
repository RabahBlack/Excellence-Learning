<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleves', function (Blueprint $table) {
           // $table->increments('id');
            $table->integer('matricule');
            $table->primary('matricule');
            $table->string('nom');
            $table->string('prenom');
            $table->date('dnaiss');
            $table->string('lieuNaiss');
            $table->string('sexe');
            $table->string('etablissement');
            $table->string('commune');
            $table->string('nivScolaire');
            $table->float('moyenne');
            $table->text('etatSante');
            $table->date('dateinsc');
            $table->string('etatDem');
            $table->string('emailtp');
            $table->string('emailtm');         
            $table->string('urlPhoto');
            $table->foreign('emailtp')->references('emailt')->on('tuteurs');
            $table->foreign('emailtm')->references('emailt')->on('tuteurs');
          
            $table->timestamps();
        });
        DB::statement('ALTER TABLE users ADD CONSTRAINT chk_etat_dem CHECK (etatDem in (0,1,2));');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eleves');
    }
}
