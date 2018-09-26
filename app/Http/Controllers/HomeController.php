<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Region;
use App\Event;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {        
        return view('home');
    }

    public function editProfile($id) {
        $regions = Region::all();
        $user = User::find($id);
        return view('auth.profile')->withUser($user)->withRegions($regions);
    }

    public function saveProfile(Request $request, $id) {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'avatar' => 'required|image|mimes:png|max:2048',
        //     'emai' => 'required|email',
        //     'address' => 'required',
        //     'region' => 'required',
        // ]);        

        $user = User::find($id);

        if ($request->hasFile('avatar')) {
            $user->name = $request->name;

            $avatar = $request->file('avatar');
            $filename = time().'.'.$avatar->getClientOriginalExtension();
            $avatar->move(public_path('img/avatar'), $filename);            
            $user->avatar = $filename;

            $user->email = $request->email;
            $user->address = $request->address;
            $user->region_id = $request->region;
            $user->save();
        } else {
            Session::flash('fail', 'Profile gagal diperbarui');
            return redirect()->back();
        }

        Session::flash('success', 'Profile telah diperbarui');
        return redirect()->back();
    }

    public function dashboard() {
        $events = Event::all();
        return view('dashboard.dash-index')->withEvents($events);
    }
}
