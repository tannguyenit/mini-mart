<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
	protected $primaryKey = 'id';
	public $timestamps = true;
	public function Cat()
	{
// return DB::table('product')->join('category', 'product.id_cat', '=', 'category.id')->select('product.*', 'category.name as cname')->paginate(10);
		return $this->belongTo("App\Cat");
	}
	public function user()
	{
		return $this->belongTo("App\User");
	}
	public function pro_image()
	{
		return $this->hasMany("App\ProductImage");
	}
}
