<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{


    use HasFactory;

    protected  $fillable =['city_id','name', 'last_name', 'email', 'address', 'phone'];

    //public function bills()
    //{
        //return $this->hasMany(Bill::class); //uno a muchos
    //}
    public function city()
    {
        return $this->belongsTo(City::class); //Esta vayna aqui es la llave foranea
    }

}
