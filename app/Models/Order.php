<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'email', 'fullname', 'phone', 'address', 'total', 'note'];
    public $timestamps = true;

    public function orderDetail()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
