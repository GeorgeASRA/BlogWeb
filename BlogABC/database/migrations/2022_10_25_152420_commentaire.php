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
        Schema::create('Commentaire', function (Blueprint $table) {
            $table->increments('idCommentaire');
            $table->string('textCommentaire');
            $table->date('dateCommentaire');
            $table->integer('idUtilisateur')->unsigned();
            $table->integer('idArticle')->unsigned();
            $table->foreign('idUtilisateur')->references('idUtilisateur')->on('Utilisateur');
            $table->foreign('idArticle')->references('idArticle')->on('Article');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Commentaire');
    }
};
