<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'national_id',
        'name',
        'email',
        'password',
        'image',
        'is_baned',
    ];
}
