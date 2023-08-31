<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $fillable =['category_id', 'city_id', 'name', 'last_name', 'post', 'address', 'email', 'phone'];

    public function category()
    {
        return $this->belongsTo(Category::class); //Pertenece
    }

    public function city()
    {
        return $this->belongsTo(City::class); //Pertenece
    }

}
