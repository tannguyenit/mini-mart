<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    protected $table = 'product_images';
	protected $primaryKey = 'id';
	public $timestamps = false;
	public function product()
	{
		return $this->belongTo("App\Product");
	}
}
