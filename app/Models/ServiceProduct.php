<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProduct extends Model
{
    protected $fillable=[
        'name',
        'description',
        'price',
        'category',

    ];
}
