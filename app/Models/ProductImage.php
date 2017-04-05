<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';
    protected $primaryKey = 'id';
    public $timestamps = false;
    public function product()
    {
        return $this->belongTo(Product::class);
    }
}
