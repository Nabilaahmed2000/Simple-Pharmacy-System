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
        'address_id',
        'pharmacy_id',
        'prescription',
        'status',
        'created_by',
        'is_insured',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function address()
    {
        return $this->belongsTo(UserAddress::class);
    }

    public function pharmacy()
    {
        return $this->belongsTo(Pharmacy::class);
    }

}
