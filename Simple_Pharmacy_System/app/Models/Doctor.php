<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'national_id',
        'name',
        'email',
        'password',
        'image',
        'is_baned',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    //if doctor related to specific area
    public function pharmacyLocations()
    {
        return $this->hasMany(PharmacyLocation::class);
    }
}
