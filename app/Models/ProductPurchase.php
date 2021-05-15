<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPurchase extends Model
{
    use HasFactory;

    protected $fillable = [
        'purchase_id',
        'name',
        'quantity',
        'purchase_price',
    ];

    public function purchases()
    {
        $this->belongsTo(Purchase::class);
    }

}
