<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrolement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'lettre',
        'validite',
        'autre_document',
        'commentaires',
        'statut', //Statut de l'enrolement : soumis, activé, annulé, expiré
       ];

       public function user(){

        return $this->belongsTo(\App\Models\User::class);

    }
}
