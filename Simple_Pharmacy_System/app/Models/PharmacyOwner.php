<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacyOwner extends Model
{
    use HasFactory;

    protected $fillable = [
        'national_id',
        'name',
        'email',
        'password',
        'image',
    ];

    // one to many relationship , @author: mariam
    //if owner has more than one pharmacy ,please check it
    public function pharmacyLocations()
    {
        return $this->hasMany(PharmacyLocation::class);
    }
}
