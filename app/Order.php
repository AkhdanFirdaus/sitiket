<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function event() {
    	return $this->belongsTo('App\Event');
    }

    public function feedback() {
    	return $this->belongsTo('App\Feedback');
    }

    public function payment() {
    	return $this->belongsTo('App\Payment');
    }
}
