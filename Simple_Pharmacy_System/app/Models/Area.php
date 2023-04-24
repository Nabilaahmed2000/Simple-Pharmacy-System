<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
    ];

    // one to many, i guess, @author: mariam
    public function pharmacyLocations()
    {
        return $this->hasMany(PharmacyLocation::class);
    }


}
