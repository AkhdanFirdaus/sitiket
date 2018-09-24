<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $timestamps = false;

    public function user() {
    	return $this->hasMany('App\User');
    }
}
