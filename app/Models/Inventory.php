<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];


    public function products()
    {
        return $this->belongsToMany(Product::class,
            'inventories_products',
            'inventory_id',
            'product_id',
        );
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

}
