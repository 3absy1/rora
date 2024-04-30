<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPayment extends Model
{
    use HasFactory;

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class, 'paymentmethod_id');
    }

}
