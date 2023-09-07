<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['provider_id', 'category_id', 'name', 'amount', 'price'];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function detail_bills()
    {
        return $this->hasMany(Detail_bill::class);
    }

}
