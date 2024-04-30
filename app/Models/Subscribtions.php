<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribtions extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_active',
        'start_at',
        'end_at',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function plan()
    {
        return $this->belongsTo(Plans::class, 'plan_id');
    }

}
