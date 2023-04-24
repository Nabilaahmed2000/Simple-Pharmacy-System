<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Webpatser\Countries\Countries;

class Area extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'country_id',
    ];

    public function country()
    {
        return $this->hasMany(Countries::class);
    }

}
