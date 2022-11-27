<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [

        'name',
        'validite',
        'statut', //Statut de l'enrolement : suspensdu,
        'user_id',
       ];


       public function user(){

        return $this->belongsTo(\App\Models\User::class);

    }
}
