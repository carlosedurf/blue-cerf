<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date_purchase',
        'total_price',
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function productPurchases()
    {
        $this->hasMany(ProductPurchase::class);
    }

}
