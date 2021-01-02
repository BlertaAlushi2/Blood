<?php

namespace App\Http\Controllers;

use App\Blood;
use App\BloodBank;
use App\Camp;
use App\Donation;
use App\Notifications\RequestNotification;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class RequestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except('requests');
        $this->middleware('verified');
    }
    public function addRequest(){
        $blood_groups = Blood::all();
        return view('pages.newRequest',['blood_groups'=>$blood_groups]);
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
    public function saveRequest(Request $request){

        $validatedData = $request->validate(
            [
                'user_id' => 'required',
                'blood_id' => 'required',
                'quantity'=>'required',
                'request_date'=>'required'
            ]
        );
        $newRequest = new \App\Request();
        $newRequest->user_id =  $validatedData['user_id'];
        $newRequest->blood_id =  $validatedData['blood_id'];
        $newRequest->request_date = $validatedData['request_date'] ;
        $newRequest->quantity =  $validatedData['quantity'];
        $newRequest->confirmed = false;

        $blood_group_bank = BloodBank::where('blood_id',$validatedData['blood_id'])->first();
        if($blood_group_bank !== null)
        {
            if($blood_group_bank->quantity>=$validatedData['quantity']){
                $newRequest->confirmed = true;
            }
        }
        $newRequest->save();
//        if($newRequest->confirmed){
//            $blood_group_bank->update(['quantity' => $blood_group_bank->quantity - $validatedData['quantity']]);
//        }
        $user = User::findOrFail($validatedData['user_id']);
        $user->notify(new RequestNotification($newRequest));
        return redirect('/home')->with('success','Request Added Successfully');
    }
    public function editRequest($id){
        $request = \App\Request::findOrFail($id);
        $blood_groups = Blood::all();
        return view('pages.editRequest',['request'=>$request,'blood_groups'=>$blood_groups]);
    }
    public function updateRequest(Request $request, $id){
        $validatedData = $request->validate(
            [
                'blood_id' => 'required',
                'quantity'=>'required',
                'request_date'=>'required'
            ]
        );

        $request = \App\Request::findOrFail($id);
        $blood_group_bank = BloodBank::where('blood_id',$validatedData['blood_id'])->first();
        $confirmed = false;
        $beforeConfirmed =$request->confirmed;
        $quantity = 0;
        if($blood_group_bank !== null)
        {
            if(!$beforeConfirmed){
                if ($blood_group_bank->quantity>= $validatedData['quantity']) {
                    $quantity = $blood_group_bank->quantity-$validatedData['quantity'];
                    $confirmed = true;
                }
            }
            else {
                if ($blood_group_bank->quantity + $request->quantity >= $validatedData['quantity']) {
                   $quantity =  $blood_group_bank->quantity+$request->quantity-$validatedData['quantity'];
                    $confirmed = true;
                }
            }
        }
        $updatedData = [
            'blood_id' => $validatedData['blood_id'],
            'quantity' => $validatedData['quantity'],
            'request_date' => $validatedData['request_date'],
            'confirmed'=>$confirmed
        ];
        $user = User::findOrFail($request->user_id);
        $request->update($updatedData);
//        if($confirmed){
//            $blood_group_bank->update(['quantity' =>$quantity]);
//        }
        $user->notify(new RequestNotification($request));
        return redirect('/home')->with('success','Request Updated Successfully');

    }
    public function requests(){
        if(Auth::user()->role === 1){
            $requests = \App\Request::all();
        }
        else{
            $requests = \App\Request::where('user_id',Auth::user()->id)->get();
        }
        return view('pages.requests',['requests'=>$requests]);
    }

    public function confirmRequest($id){
        $request= \App\Request::find($id);
        $blood_group_bank = BloodBank::where('blood_id', ($request->blood_id))->first();
        if($request->confirmed){
            $blood_group_bank->update(['quantity' => $blood_group_bank->quantity - $request->quantity]);
        }
        $request->update(['confirm_request'=>true]);
        return redirect(route('home'));
    }
}
