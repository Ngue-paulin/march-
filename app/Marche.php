<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Marche extends Model
{
    use Notifiable;

    protected $guarded = [];

    protected $fillable = [
        'reference','secteur_marche','date_debut','date_fin','date_livréson','statut', 'type_marche', 'montant','delai_livreson','lieu_livreson','financement','imputation','description', 'maitre_oeuvre','user_id',
        'prestataire_id',
    ];

    public function users(){

            return $this->belongsTo('App\User');
        }

        public function atributions(){

            return $this->belongsTo('App\Atribution');
        }

   /* public function prestataires(){

            return $this->hasOne('App\Prestataire');
    }*/

}
