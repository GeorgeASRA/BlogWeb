<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Article', function(BluePrint $table){
            $table->increments('idArticle');
            $table->string('titreArticle', 50);
            $table->string('texteArticle', 1000);
            $table->string('resumeArticle', 150);
            $table->date('dateArticle');
            $table->integer('idUtilisateur')->unsigned();;
            $table->integer('idCategorie')->unsigned();;
            $table->foreign('idUtilisateur')->references('idUtilisateur')->on('Utilisateur');
            $table->foreign('idCategorie')->references('idCategorie')->on('Categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Article');
    }
};
