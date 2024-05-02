<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Establishment extends Model
{
    protected $fillable = [
        'nit',
        'name_company',
        'address',
        'email',
        // Agrega aquí cualquier otro atributo que desees permitir en la asignación en masa
    ];

    public function serviceproducts(){
        return $this->hasMany(ServiceProduct::class);
    }
}
