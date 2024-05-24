<?php

namespace App\Models;

use App\Models\City;
use App\Models\DistributionCenter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetailPrice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function distributionCenter()
    {
        return $this->belongsTo(DistributionCenter::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
