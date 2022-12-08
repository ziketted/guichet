<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exoneration extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [

        'titre',
        'lettre',
        'attestation',
        'copie_avis',
        'liste_colisage',
        'projet',
        'transport',
        'facture',
        'affectation',
        'commentaire',
        'type',
        'statut',
        'user_id',
       ];
       public function user(){

        return $this->belongsTo(\App\Models\User::class);

    }
       public function getCouleurAttribute($value){


        if ($this->statut == 'soumis') {
            $value='warning';
            $this->etat='soumis';
        }else{
            $value='success';
            $this->etat='activé';
        }
        return $value;

    }
}
