<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membre extends Model
{
    use HasFactory;

    protected $guarded = [] ;

 
    
    public function categorie()
    {
     return $this->belongsTo('App\Categorie') ;
    }
}
