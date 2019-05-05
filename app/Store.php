<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store';
	public function setUpdatedAtAttribute($value)
	{
	    // to Disable updated_at
	}
}
