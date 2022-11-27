<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory,SoftDeletes;
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
