<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorcycle extends Model
{
    protected $fillable = 
    [
        'producer',
        'model',
        'price',
        'year',
        'color',
        'description'
    ];
}
