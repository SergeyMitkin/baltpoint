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

    public function checkExistingBrand($brand_name, $brand_id = false) {
        $existing_brand = self::where('name', $brand_name)->first();

        if ($existing_brand) {
            if ($brand_id) {
                return redirect()->route('brands.edit', [
                    'id' => $brand_id->id,
                    'error_text' => 'Бренд с таким названием уже существует'
                ]);
            } else {
                return redirect()->route('brands.create', [
                    'error_text' => 'Бренд с таким названием уже существует'
                ]);
            }
        } else {
            return '';
        }
    }
}
