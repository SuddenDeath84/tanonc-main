<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    protected $table ='guardian';
    use HasFactory;

    protected $fillable = [
        'gondviseloazon',
        'oktazon',
        'telefonszam',
        'email',
        'torvenyes_kepviselo'

    ];

public function Masterdata(){
    
    return $this->hasOne('App\Models\Masterdata','oktazon','oktazon'); 
}

public function Familydata(){
    
    return $this->hasMany('App\Models\Familydata','gondviseloazon','gondviseloazon'); 
}
}
