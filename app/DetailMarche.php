<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailMarche extends Model
{
    protected $fillable = [
        'total_htva_avr', 'total_htva_apr' , 'rabais' , 'tva' , 'air' ,
        'ttc' , 'neta_percevoir' , 'transport' , 'assurance'
    ];

    public function designations(){

        return $this->hasMany('App\Designation');
    }
}
