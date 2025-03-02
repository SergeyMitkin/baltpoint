<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = ['name'];

    public static function edit($data): void {
        $brand = self::find($data['id']);
        $brand->name = $data['name'];
        $brand->save();
    }
}
