<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function simcards()
    {
        return $this->belongsTo(SimsCard::class, 'simcard_id');
    }
}

