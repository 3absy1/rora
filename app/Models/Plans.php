<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'minutes',
        'sale_price',

    ];

    public function subscribtion()
    {
        return $this->hasMany(Subscribtions::class);
    }
    public function order()
    {
        return $this->hasMany(Orders::class);
    }

}
