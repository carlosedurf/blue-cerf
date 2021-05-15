<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{
    use HasFactory;

    protected $fillable = [
        'sale_id',
        'inventory_id',
        'quantity',
        'sale_price',
    ];

    public function sale()
    {
        $this->belongsTo(Sale::class);
    }

    public function inventory()
    {
        $this->belongsTo(Inventory::class);
    }

}
