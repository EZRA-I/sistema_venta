<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable =['employee_id', 'customer_id', 'city_id', 'subtotal', 'total'];


    public function employee() {
        return $this->belongsto(Employee::class);
    }

    public function customer() {
            return $this->belongsto(Customer::class);
    }

    public function city() {
        return $this->belongsto(City::class);
    }
}
