<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Other extends Model
{
    protected $table = 'others';
	protected $primaryKey = 'id';
	public $timestamps = true;
}
