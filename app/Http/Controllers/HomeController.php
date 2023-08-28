<?php

namespace App\Http\Controllers;

use App\Models\shipment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
    public function myhome() {
        // return view('home');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('home', compact('users'));
    }
    //chnage password
    public function changePassword() {
        return view('auth.resetPass');
    }
    //chnage password
    public function updatePassword(Request $request) {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect()->route('home')->with("status", "Password changed successfully!");

    }
    //fleet
    public function fleet() {
        $shipmetns = shipment::where('user_id', auth()->user()->id)->get();
        return view('Fleet.index', compact('shipmetns'));

    }
}
