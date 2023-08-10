<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable =['name'];

    public function city() {
        return $this->hasMany(City::class); // este es el permiso que le otorgare a city, para que departamento entre y retorne en city.
    }
}
