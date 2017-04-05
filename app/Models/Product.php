<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name', 'price', 'sale', 'quantity', 'intro', 'content', 'images', 'keyword', 'description', 'user_id', 'cat_id',
    ];
    public $timestamps = true;
    public function cat()
    {
        return $this->belongsTo(Cat::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function proImage()
    {
        return $this->hasMany(ProductImage::class);
    }
}
