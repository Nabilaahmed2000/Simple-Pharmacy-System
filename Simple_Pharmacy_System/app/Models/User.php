<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'national_id',
        'name',
        'email',
        'gender',
        'date_of_birth',
        'phone',
        'street_name',
        'building_number',
        'floor_number',
        'flat_number',
        'is_main',
        'password',
    ];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    //the user has many addresses
    public function areas()
    {
        return $this->belongsToMany(Area::class);
    }

    //the user has one location in area
    // if user has more than one location in area ,please check it
    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    //the user has many drugs
    public function drugs()
    {
        return $this->belongsToMany(Drug::class);
    }

    

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
