<?php

namespace App\Models;

use App\Models\Tarif;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function tarifs()
    {
        return $this->hasMany(Tarif::class);
    }
}
