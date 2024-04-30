<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'rate',
        'message',
        'subject',
    ];

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
}
