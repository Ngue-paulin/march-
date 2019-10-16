<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atribution extends Model
{
protected $fillable = [
    'user_id', 'prestataire_id', 'delai_livreson' , 'lieu_livreson' , 'marche_id'
];

    public function users(){

        return $this->hasOne('App\User');
    }

    public function marches(){

        return $this->hasOne('App\Marche');
    }

    public function prestataires(){

        return $this->hasOne('App\Prestataire');
    }

}
