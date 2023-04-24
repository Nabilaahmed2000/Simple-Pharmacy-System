<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacyLocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'area_id',
        'priority',
        'doctor_id',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }


}
