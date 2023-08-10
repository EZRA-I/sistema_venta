<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_detail extends Model
{
    use HasFactory;

    protected $fillable =['bill_id', 'product_id', 'amount', 'price'];

    public function bills() {
        return $this->belongsTo(Bill::class);
    }
}
