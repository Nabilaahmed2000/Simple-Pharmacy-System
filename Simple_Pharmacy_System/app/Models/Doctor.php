<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cog\Contracts\Ban\Bannable as BannableInterface;
use Cog\Laravel\Ban\Traits\Bannable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Doctor extends Authenticatable implements  BannableInterface
{
    use HasFactory , HasRoles , Bannable;
    protected $fillable = [
        'national_id',
        'name',
        'email',
        'password',
        'image',
        'pharmacy_id',
        'is_banned',
        'banned_at',
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
