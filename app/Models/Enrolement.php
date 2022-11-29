<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Enrolement extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'lettre',
        'validite',
        'autre_document',
        'commentaires',
        'statut',
        //attribut complémentaire pour le design.
        'etat',
        'couleur',
       ];

       public function user(){

        return $this->belongsTo(\App\Models\User::class);

    }

    public function getCouleurAttribute($value){


        if ($this->statut == 'soumis') {
            $value='warning';
            $this->etat='En attente de validation';
        }else{
            $value='success';
            $this->etat='activé';
        }
        return $value;

    }


}
