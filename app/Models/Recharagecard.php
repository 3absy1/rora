<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recharagecard extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'minutes',
        'amount',

    ];

    public function recharagerequest()
    {
        return $this->hasMany(RecharageRequest::class);
    }
}
