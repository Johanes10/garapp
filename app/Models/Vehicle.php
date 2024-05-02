<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable=[
        'brand',
        'model',
        'year',
        'number_plate',
        'type',
    ];
}
