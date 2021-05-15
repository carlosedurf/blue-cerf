<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'quantity',
        'min_quantity',
    ];

    public function inventoryHistory()
    {
        $this->hasOne(InventoryHistory::class);
    }

    public function productSales()
    {
        $this->hasMany(ProductSale::class);
    }

}
