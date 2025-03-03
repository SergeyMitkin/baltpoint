<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public static function edit($data): void {
        $brand = self::find($data['id']);
        $brand->name = $data['name'];
        $brand->save();
    }
}
