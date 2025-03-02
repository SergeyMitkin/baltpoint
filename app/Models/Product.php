<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description', 'quantity'];

    public static function edit($data): void {
        $product = self::find($data['id']);
        $product->name = $data['name'];
        $product->description = $data['description'];
        $product->quantity = $data['quantity'];
        $product->price = $data['price'];

        $product->save();
    }
}
