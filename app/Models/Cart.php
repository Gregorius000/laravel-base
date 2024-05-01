<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function scopeGetCartByUser(Builder $query, $userId): Builder
    {
        return $query->selectRaw("carts.id as id, qty as total_qty, name, description, price, image")
            ->leftJoin('products', 'products.id', '=', 'carts.product_id')
            ->where('user_id', $userId);
    }
}
