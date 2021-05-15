<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'address_neighborhood',
        'address_city',
        'address_state',
        'address_country',
        'address_zipcode',
        'starts',
        'internal_obs',
    ];

    public function sales()
    {
        $this->hasMany(Sale::class);
    }

}
