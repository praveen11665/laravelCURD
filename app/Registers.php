<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registers extends Model
{
	use SoftDeletes;
	protected $table    = 'register';
   	protected $fillable = ['id', 'name', 'mobile', 'email'];
   	protected $dates    = ['deleted_at'];
}
