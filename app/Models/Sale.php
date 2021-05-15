<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'user_id',
        'date_sale',
        'total_price',
    ];

    public function client()
    {
        $this->belongsTo(Client::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function productSales()
    {
        $this->hasMany(ProductSale::class);
    }

}
