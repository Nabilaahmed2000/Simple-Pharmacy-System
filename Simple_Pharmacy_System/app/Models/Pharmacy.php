<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'area_id',
        'priority',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    // error (Habd)
    public function owner()
    {
        return $this->hasOne(Doctor::class)->hasRole('owner');
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

}
