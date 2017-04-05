<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $table = 'cats';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'parent_id', 'icon', 'keyword', 'description'];
    public $timestamps = true;

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
