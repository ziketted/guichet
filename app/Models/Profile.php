<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'denomination',
        'sigle',
        'rue',
        'commune',
        'numero',
        'quartier',
        'province',
        'district',
        'date_creation',
        'lieu',
        'compte_bancaire',
        'telephone',
        'objectif_global',
        'objectif_specifique',
        'responsable_nom',
        'responsable_postnom',
        'responsable_prenom',
        'responsable_fonction',
        'responsable_email',
        'responsable_phone',
        'doc_statut',
        'doc_certificat',
        'doc_autorisation',
        'doc_personnalite',
        'doc_convention',
        'doc_accord',
        'fourniture',
        'domaine',
        'rayon_intervention',
        'justification',
        'projet_encours',
        'beneficiaire',
        'impact',
        'documents',
        'user_id',
    ];

    public function user(){

        return $this->belongsTo(\App\Models\User::class);

    }
}
