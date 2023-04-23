<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'doctor_id',
        'area_id',// @author:mariam
        'status',
        'is_insured',
    ];

    // can we only use many to many? @author: mariam
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    
    // @author :mariam
    public function pharmacyLocation()
    {
        return $this->belongsTo(PharmacyLocation::class);
    }

    // // many to many :author mariam
    // public function users()
    // {
    //     return $this->belongsToMany(User::class);
    // }
}
