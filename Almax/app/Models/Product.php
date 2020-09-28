<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function outlet()
    {
        return $this->belongsTo(Outlet::class);
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
