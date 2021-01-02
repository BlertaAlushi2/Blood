<?php

namespace App\Http\Controllers;

use App\Blood;
use App\BloodBank;
use App\Camp;
use App\Donation;
use App\User;
use DateTime;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except('donations');
        $this->middleware('verified');
    }

    public function addDonation()
    {
        $blood_groups = Blood::all();
        $camps = Camp::all();
        return view('pages.newDonation', ['blood_groups' => $blood_groups, 'camps' => $camps]);
    }

    public function searchUser(Request $request)
    {

        $validatedData = $request->validate(
            [
                'personal_number' => 'required|numeric',
            ]
        );
        $user = User::where('personal_number', $validatedData['personal_number'])->first();
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

    public function saveDonation(Request $request)
    {

        $validatedData = $request->validate(
            [
                'user_id' => 'required',
                'camp_id' => 'required',
                'blood_id' => 'required',
                'quantity' => 'required',
                'details' => 'required',
                'donation_date' => 'required'
            ]
        );
        $user = User::find($validatedData['user_id']);
        $lastDonation = Donation::where('user_id', $user->id)->orderBy('donation_date', 'DESC')->first();

        $nowdate = new DateTime(date('Y-m-d', strtotime($validatedData['donation_date'])));

        $lastdate = new DateTime(date('Y-m-d', strtotime( $lastDonation != null ? $lastDonation->donation_date:'2020-01-01')));
        $interval = $nowdate->diff($lastdate);

        if ($user->age > 16 && $interval->format('%a') > 56) {
            $newDoantion = new Donation();
            $newDoantion->user_id = $validatedData['user_id'];
            $newDoantion->camp_id = $validatedData['camp_id'];
            $newDoantion->details = $validatedData['details'];
            $newDoantion->blood_id = $validatedData['blood_id'];
            $newDoantion->donation_date = $validatedData['donation_date'];
            $newDoantion->quantity = $validatedData['quantity'];
            $newDoantion->save();
//            if ($newDoantion !== null) {

//                $blood_group_bank = BloodBank::where('blood_id', ($validatedData['blood_id']))->first();
////        dd($blood_group_bank);
//                if ($blood_group_bank !== null) {
//                    $blood_group_bank->update(['quantity' => $blood_group_bank->quantity + $validatedData['quantity']]);
//                } else {
//                    $newBloodBank = new BloodBank();
//                    $newBloodBank->blood_id = $validatedData['blood_id'];
//                    $newBloodBank->quantity = $validatedData['quantity'];
//                    $newBloodBank->save();
//                }
//            }
            return redirect('/home')->with('success', 'Donation Added Successfully');
        } else {
            return redirect()->back()->with('error', 'This donation cannot be done! Your last time donation is too early or you are too young!');
        }
    }

    public function donations()
    {
        $donations = Donation::all();
        return view('pages.donations', ['donations' => $donations]);
    }

    public function editDonation($id)
    {
        $donation = Donation::findOrFail($id);
        $blood_groups = Blood::all();
        $camps = Camp::all();
        return view('pages.editDonation', ['donation' => $donation, 'blood_groups' => $blood_groups, 'camps' => $camps]);
    }

    public function updateDonation(Request $request, $id)
    {
        $validatedData = $request->validate(
            [
                'camp_id' => 'required',
                'blood_id' => 'required',
                'quantity' => 'required',
                'details' => 'required',
                'donation_date' => 'required'
            ]
        );
        $updatedData = [
            'camp_id' => $validatedData['camp_id'],
            'blood_id' => $validatedData['blood_id'],
            'quantity' => $validatedData['quantity'],
            'details' => $validatedData['details'],
            'donation_date' => $validatedData['donation_date'],
        ];
        $donation = Donation::findOrFail($id);
        $beforeQunatity = $donation->quantity;

        $user = User::find($donation->user_id);

        $lastDonation = Donation::where('user_id', $user->id)->where('id', '<>', $donation->id)->orderBy('donation_date', 'DESC')->first();
        $nowdate = new DateTime(date('Y-m-d', strtotime($validatedData['donation_date'])));

        $lastdate = new DateTime(date('Y-m-d', strtotime($lastDonation !== null?  $lastDonation->donation_date:'2020-01-01')));
        $interval = $nowdate->diff($lastdate);

        if ($user->age > 16 && $interval->format('%a') > 56) {
            $donation->update($updatedData);
//            $blood_group_bank = BloodBank::where('blood_id', ($validatedData['blood_id']))->first();
//        dd($blood_group_bank);
//            if ($blood_group_bank !== null) {
//                $blood_group_bank->update(['quantity' => $blood_group_bank->quantity + $validatedData['quantity'] - $beforeQunatity,]);
//            } else {
//                $newBloodBank = new BloodBank();
//                $newBloodBank->blood_id = $validatedData['blood_id'];
//                $newBloodBank->quantity = $validatedData['quantity'];
//                $newBloodBank->save();
//            }
            return redirect('/home')->with('success', 'Donation Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'This donation cannot be done! Your last time donation is too early or you are too young!');
        }

    }
    public function confirmDonation($id){
        $donation = Donation::findOrFail($id);
        $blood_group_bank = BloodBank::where('blood_id', ($donation->blood_id))->first();
//        dd($blood_group_bank);
        if ($blood_group_bank !== null) {
            $blood_group_bank->update(['quantity' => $blood_group_bank->quantity + $donation->quantity]);
        } else {
            $newBloodBank = new BloodBank();
            $newBloodBank->blood_id = $donation->blood_id;
            $newBloodBank->quantity = $donation->quantity;
            $newBloodBank->save();
        }
        $donation->update(['confirm_donation'=>true]);
        return redirect(route('donations'));
    }
}
