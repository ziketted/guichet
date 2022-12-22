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
        'notification',
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
        } elseif ($this->statut == 'annulé') {
            $value='secondary';
            $this->etat='Demande annulé';
        }
        else{
            $value='success';
            $this->etat='activé';
        }
        return $value;

    }
    public function verification_document (){
        $enrolementDocument = Enrolement:: where('user_id',  auth()->user()->id)
        ->where('statut', 'validé')
        ->orderBy('created_at', 'DESC')
        ->take(1)->count();
        //Vérifiez si le requerant a un enrolement
        if ($enrolementDocument==0){
           return true;
        }
    }

}
