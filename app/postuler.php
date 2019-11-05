<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class postuler extends Model
{

    protected $fillable = [
     'marche_desc' , 'prestataire_sct'
    ];
}
