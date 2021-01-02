<?php

namespace App\Http\Controllers;

use App\BloodBank;
use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $this->middleware('verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $donations = Donation::where('user_id',Auth::id())->get();
        $bloods = BloodBank::all();
        return view('home',['bloods'=>$bloods,'donations'=>$donations]);
    }
    public function readNotifications(){
        Auth::user()->unreadNotifications->markAsRead();
        return response()->json([
            'notifications' =>Auth::user()->unreadNotifications,
        ]);
    }

}
