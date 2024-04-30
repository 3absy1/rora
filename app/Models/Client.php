<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Client extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'is_reseller',
        'minutes',
        'ads_count',
        'ads_minutes',
    ];

    // public function reviews()
    // {
    //     return $this->hasMany(Reviews::class);
    // }
    // public function subscribtions()
    // {
    //     return $this->hasMany(Subscribtions::class);
    // }
    // public function order()
    // {
    //     return $this->hasMany(Orders::class);
    // }
    // public function call()
    // {
    //     return $this->hasMany(Call::class);
    // }
    // public function recharagerequest()
    // {
    //     return $this->hasMany(RecharageRequest::class);
    // }
    // public function creditTransaction()
    // {
    //     return $this->hasMany(CreditTransaction::class);
    // }
    // public function clientPayment()
    // {
    //     return $this->hasMany(ClientPayment::class);
    // }

    protected $hidden = [
        'password',
        'remember_token',
    ];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

}
