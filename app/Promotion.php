<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $table      = 'promotion';
    protected $primaryKey = 'id';
    public $timestamps    = true;
}
