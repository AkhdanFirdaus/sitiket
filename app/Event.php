<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	public $timestamps = false;
	
    public function user() {
    	return $this->belongsTo('App\User');
    }

    public function ticket() {
    	return $this->hasMany('App\Ticket');
    }

    public function photo() {
    	return $this->hasMany('App\Photo');
    }

    public static function boot() {
    	parent::boot();

    	static::deleting(function($event) {
    		$event->ticket()->delete();
    	});
    }
}
