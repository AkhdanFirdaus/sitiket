<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Photo;
use Auth;
use Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = Ticket::all();
        return view('dashboard.dash-index')->withTickets($tickets);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create-event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'description' => 'required',
            'event' => 'required',
        ]);

        $event = new Event();
        $event->name = $request->name;
        $event->slug = str_slug($request->name);
        $event->user()->associate(Auth::user());
        $event->location = $request->location;
        $event->description = $request->description;
        $event->event_start = $request->event;
        $event->save();

        Session::flash('success', 'Event telah di save');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $event = Event::where('slug', $slug)->first();
        return view('event.show-event')->withEvent($event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $event = Event::where('slug', $slug)->first();
        // dd($event);
        return view('event.edit-event')->withEvent($event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        // $this->validate($request, [
        //     'photo' => 'required',
        //     'name' => 'required',
        //     'location' => 'required',
        //     'description' => 'required',
        //     'event' => 'required',
        // ]);        
        $event = Event::where('slug', $slug)->firstOrFail();
        dd($event);
        // $event->name = $request->name;
        // $event->slug = str_slug($request->name);
        // $event->user()->associate(Auth::user());
        // $event->location = $request->location;
        // $event->description = $request->description;
        // $event->event_start = $request->event;
        // $event->save();

        // if ($request->hasFile('photo')) {
        //     $file = $request->file('photo');
        //     $filename = time().'.'.$file->getClientOriginalExtension();
        //     $file->move(public_path('img/photo'), $filename);
        // }
        // $photo = new Photo();
        // $photo->event_id = $event->id;
        // $photo->photoName = $filename;
        // $photo->save();

        // Session::flash('success', 'Berhasil mengupdate');
        // return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $event = Event::where('slug', $slug)->first();
        $event->delete();

        Session::flash('success', 'Event telah dihapus');
        return redirect()->back();
    }
}
