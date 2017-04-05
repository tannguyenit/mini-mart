<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    protected $table = 'others';
    protected $primaryKey = 'id';
    protected $fillable = ['fullname', 'email', 'address', 'phone', 'content'];
    public $timestamps = true;
}
