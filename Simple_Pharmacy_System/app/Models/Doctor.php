<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Doctor extends Authenticatable
{
<<<<<<< HEAD
    use HasFactory,HasRoles;
=======
    use HasFactory , HasRoles;
>>>>>>> 51ececdcaef89438ea9e01614a98f125b4cbf7e1
    protected $fillable = [
        'national_id',
        'name',
        'email',
        'password',
        'image',
        'pharmacy_id',
        'is_baned',
    ];

    protected string $guard_name = 'web';

    public function scopeUnbanned($query)
    {
        return $query->where('is_banned', false);
    }
//    public function scopeOwner($query)
//    {
//
//        return Doctor::role('owner')->get();
//    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

     public function pharmacy()
     {
         return $this->belongsTo(Pharmacy::class);
     }

}
