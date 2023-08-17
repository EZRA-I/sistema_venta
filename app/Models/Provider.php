<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable =['city_id', 'name', 'last_name', 'post', 'address', 'email', 'phone'];
    
    public function city()
    {
        return $this->belongsTo(City::class); //Esta vayna aqui es la llave foranea
    }
}
