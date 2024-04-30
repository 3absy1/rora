<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecharageRequest extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }
    public function recharagecard()
    {
        return $this->belongsTo(Recharagecard::class, 'recharagecard_id');
    }
}
