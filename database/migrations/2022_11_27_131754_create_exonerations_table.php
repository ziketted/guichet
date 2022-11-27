<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExonerationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exonerations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unsigned();
            $table->string('lettre',300)->nullable();
            $table->string('attestation',300)->nullable();
            $table->string('copie_avis',300)->nullable();
            $table->string('liste_colisage',300)->nullable();
            $table->string('projet',300)->nullable();
            $table->string('transport',300)->nullable();
            $table->string('facture',300)->nullable();
            $table->string('affectation',300)->nullable();
            $table->string('commentaire',300)->nullable();
            $table->string('type',300)->nullable();
            $table->string('statut',300)->nullable();
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
        Schema::dropIfExists('exonerations');
    }
}
