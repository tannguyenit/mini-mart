<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    protected $fillable = ['fullname', 'email', 'address', 'phone', 'content'];
    public $timestamps = true;
}
