<?php

namespace App\Models;

use App\Models\RetailPrice;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function retailPrices()
    {
        return $this->hasMany(RetailPrice::class);
    }
}
