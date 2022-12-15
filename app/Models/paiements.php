<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paiements extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type_paiement',
        'montant',
        'statut',
        'id_enrolement',
       ];

       public function user(){

        return $this->belongsTo(\App\Models\User::class);

    }
}
