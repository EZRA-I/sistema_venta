<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable =['department_id', 'name', 'description'];

    public function department()

    {
        return $this->belongsTo(Department::class);
    }

    public function bills() {
        return $this->hasMany(Bill::class);
    }
}
