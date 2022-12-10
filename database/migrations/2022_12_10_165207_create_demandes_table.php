<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->date('naissance');
            $table->string('lieu');
            $table->string('telephone');
            $table->string('email');
            $table->string('pays');
            $table->string('adress');
            $table->string('situation');
            $table->string('pere');
            $table->string('nom_prenom_mere');
            $table->longText('passport');
            $table->date('naissance_pere');  
            $table->date('naissance_mere');  
    
            $table->boolean('gr');  
            $table->boolean('police');  

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
        Schema::dropIfExists('demandes');
    }
}
