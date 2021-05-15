<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'inventory_id',
        'user_id',
        'action',
    ];

    public function inventory()
    {
        $this->belongsTo(Inventory::class);
    }

    public function user()
    {
        $this->belongsTo(User::class);
    }

}
