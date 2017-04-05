<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'cats';
    protected $primaryKey = 'id';
    public $timestamps = false;
	public function product()
	{
		return $this->hasMany('App\Product');
	}
}
