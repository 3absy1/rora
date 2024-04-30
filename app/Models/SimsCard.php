<?php

namespace App\Models;

use App\Models\Call;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SimsCard extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone_number',
    ];

    public function call()
    {
        return $this->hasMany(Call::class);
    }
}

