<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'quantity'];

    public function comments(): HasMany
    {
        return $this->hasMany(Product::class, 'products_brand_id_foreign');
    }

    public static function edit($data): void {
        $product = self::find($data['id']);
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->quantity = $data['quantity'];
        $product->price = $data['price'];

        $product->save();
    }
}
