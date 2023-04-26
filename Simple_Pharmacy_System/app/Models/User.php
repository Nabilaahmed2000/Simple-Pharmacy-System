<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
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
        'password',
    ];

    //many to many relationship, @author: mariam
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }




    public function area()
    {
        return $this->hasOne(Area::class);
    }

    // we think there is no relation between user and drug @author: somia and mariam
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
