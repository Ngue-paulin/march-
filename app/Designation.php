<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable = [
        'designat' , 'unite' , 'quantite' , 'prix_u' , 'pt_htva' , 'detailmarche_id'
    ];


    public function detailmarches(){

        return $this->hasOne('App\DetailMarche');
    }
}
