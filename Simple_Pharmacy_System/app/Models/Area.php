<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];

    public function pharmacyLocations()
    {
        return $this->hasMany(PharmacyLocation::class);
    }

    //not sure if this is correct
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
}
