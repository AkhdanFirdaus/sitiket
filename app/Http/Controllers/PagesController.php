<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class PagesController extends Controller
{
    public function index() {
    	$events = Event::all(); 
    	return view('welcome')->withEvents($events);
    }
}
