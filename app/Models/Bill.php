<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable =['employee_id', 'customer_id', 'description'];

    public function invoice_detail() {
        return $this->hasMany(Bill::class);
    }
    public function empleyee() {
        return $this->hasMany(Employee::class);
    }
    public function customer() {
            return $this->hasMany(Customer::class);
    }

    public function product() {
            return $this->hasMany(Product::class);
    }
}
