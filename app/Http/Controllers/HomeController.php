<?php

namespace App\Http\Controllers;

use App\BloodBank;
use App\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;
use DB;

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
        $chartDonations = Donation::groupBy('donations.camp_id','camps.city')->selectRaw('camps.city as label, SUM(donations.quantity) As y')
        ->join('camps','camp_id','=','camps.id')->withCasts([
            'y' => 'integer'
        ])
        ->get();
        $bloods = BloodBank::all();
        $chartBloodBanks = BloodBank::join('bloods', 'blood_banks.blood_id', '=', 'bloods.id')
        ->select('blood_banks.quantity as y', 'bloods.name as label')
        ->withCasts([
            'y' => 'integer'
        ])->get();

        $bloodDonationsLastSixMonths = [];
        $groupedDonations = Donation::where("donation_date",">", Carbon::now()->subMonths(6))->where("donation_date","<", Carbon::now())->get()->groupBy(function($row){
            return Carbon::parse($row->donation_date)->format('Y F');
        })->map(function ($item, $key) {
            return $key = $item->sum('quantity');
        });
        
        foreach($groupedDonations as $key=>$value){
            $bloodDonationsLastSixMonths[] = [
                'label' => $key,
                'y' => $value
            ];
        }

        return view('home',['bloods'=>$bloods,'donations'=>$donations,'chartDonations' => $chartDonations, 'chartBloodBanks'=>$chartBloodBanks, 'bloodDonations'=>$bloodDonationsLastSixMonths]);
    }
    public function readNotifications(){
        Auth::user()->unreadNotifications->markAsRead();
        return response()->json([
            'notifications' =>Auth::user()->unreadNotifications,
        ]);
    }

}
