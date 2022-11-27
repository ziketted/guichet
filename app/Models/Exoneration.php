<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Exoneration extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        'lettre',
        'attestation',
        'copie_avis',
        'liste_colisage',
        'projet',
        'transport',
        'facture',
        'affectation',
        'commentaire',
        'user_id',
       ];
}
