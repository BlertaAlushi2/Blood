<?php

namespace App\Http\Controllers;

use App\Blood;
use App\Camp;
use App\User;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function addDonation(){
        $blood_groups = Blood::all();
        $camps = Camp::all();
        return view('pages.newDonation',['blood_groups'=>$blood_groups,'camps'=>$camps]);
    }

    public function searchUser(Request $request){

        $validatedData = $request->validate(
            [
                'personal_number' => 'required|numeric',
            ]
        );

        $user = User::where('personal_number',$validatedData['personal_number'])->first();
        if ($user) {
                return response()->json([
                    'status' => "success",
                    'user' => $user
                ]);
            } else {
                return response()->json([
                    'status' => "danger",
                    'message' => 'No user is found',
                ]);
            }
    }
}
