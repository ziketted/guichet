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
       ];

       public function user(){

        return $this->belongsTo(\App\Models\User::class);

    }
}
