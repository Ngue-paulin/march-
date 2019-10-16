<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prestataire extends Model
{
    protected $fillable = ['nom','statut_juridique','responsable','profession','entreprise','tel','email','cni','ville','boite_postale',
    'secteur_activite','numero_contrib','numero_rg','numero_compbanck','banck'
];


public function atributions(){
    return $this->hasMany('App\Atribution');
}

}
