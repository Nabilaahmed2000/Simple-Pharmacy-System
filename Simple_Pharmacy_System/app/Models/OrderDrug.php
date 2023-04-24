<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDrug extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'drug_id',
        'quantity',
        'price',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function drugs()
    {
        return $this->belongsToMany(Drug::class);
    }
}
