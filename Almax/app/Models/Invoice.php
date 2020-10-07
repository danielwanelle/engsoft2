<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'key',
        'emission',
        'payament',
        'value',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
