<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'quantity',
        'type',
        'price',
    ];

    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    //to specify which pharmacy location has this drug
    public function pharmacyLocations()
    {
        return $this->belongsToMany(PharmacyLocation::class);
    }
}
