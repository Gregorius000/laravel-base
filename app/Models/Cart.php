<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = ['created_at', 'updated_at'];

    public function scopeGetCartByUser(Builder $query): void
    {
        $query->selectRaw("qty as total_qty, name, description, price, image")
            ->leftJoin('products', 'products.id', '=', 'carts.product_id')
            ->where('user_id', Auth::user()->id);
    }
}
