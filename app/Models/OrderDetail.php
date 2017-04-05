<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "order_details";
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'order_id', 'product_id', 'quantity'];
    public $timestamps = true;

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
