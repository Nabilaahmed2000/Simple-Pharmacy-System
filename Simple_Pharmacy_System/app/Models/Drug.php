<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'quantity',
        'type',
        'price',
    ];

    // many to many,  @author: mariam
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }


    // Define the Accessor to convert price from cents to dollars
    public function getPriceAttribute($value)
    {
        return $value / 100;
    }

    // Define the Mutator to convert price from dollars to cents
    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = $value * 100;
    }
}
