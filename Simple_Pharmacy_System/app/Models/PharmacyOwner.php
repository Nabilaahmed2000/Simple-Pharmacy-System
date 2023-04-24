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

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
