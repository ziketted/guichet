<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->string('denomination',300)->nullable();
            $table->string('sigle',300)->nullable();
            $table->string('rue',300)->nullable();
            $table->string('numero',300)->nullable();
            $table->string('commune',300)->nullable();
            $table->string('quartier',300)->nullable();
            $table->string('province',300)->nullable();
            $table->string('district',300)->nullable();
            $table->string('date_creation',300)->nullable();
            $table->string('telephone',300)->nullable();
            $table->string('lieu',300)->nullable();
            $table->string('compte_bancaire',300)->nullable();
            $table->string('objectif_global',500)->nullable();
            $table->string('objectif_specifique',500)->nullable();
            $table->string('doc_autorisation',300)->nullable();
            $table->string('doc_personnalite',300)->nullable();
            $table->string('doc_convention',300)->nullable();
            $table->string('doc_certificat',300)->nullable();
            $table->string('doc_accord',300)->nullable();
            $table->string('domaine',300)->nullable();
            $table->string('responsable_nom',300)->nullable();
            $table->string('responsable_postnom',300)->nullable();
            $table->string('responsable_prenom',300)->nullable();
            $table->string('responsable_fonction',300)->nullable();
            $table->string('responsable_email',300)->nullable();
            $table->string('responsable_phone',300)->nullable();
            $table->string('doc_statut',300)->nullable();
            $table->string('rayon_intervention',300)->nullable();
            $table->string('justification',300)->nullable();
            $table->string('projet_encours',300)->nullable();
            $table->string('beneficiaire',300)->nullable();
            $table->string('fourniture',300)->nullable();
            $table->string('impact',300)->nullable();
            $table->string('documents',300)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')
             ->references('id')
             ->on('users')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
