<?php

namespace App\Http\Controllers;

use App\Blood;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except('viewProfile','editProfile');
        $this->middleware('verified');
    }
    public function viewProfile()
    {
        $blood_groups = Blood::all();
        if (!empty(Auth::user()->image)) {
            $path_to_file = 'app/public/profile_photo/' . Auth::user()->image;
            $path = storage_path($path_to_file);
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data = file_get_contents($path);
            $profile_picture = 'data:image/' . $type . ';base64,' . base64_encode($data);
        } else {
            $profile_picture = 'assets/media/avatars/avatar13.jpg';
        }

        return view('pages.profile', ['blood_groups' => $blood_groups, 'user' => Auth::user(), 'profile_picture' => $profile_picture]);
    }

    public function editProfile(Request $request, $id)
    {
        $profile_photo = Auth::user()->image;
        if (!empty($request->file('image'))) {
            $uploadedFile = $request->file('image');
            $profile_photo = time() . $uploadedFile->getClientOriginalName();
            Storage::disk('local')->putFileAs(
                'public/profile_photo/',
                $uploadedFile,
                $profile_photo
            );
        }
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'city' => 'required',
                'country' => 'required|string',
                'personal_number' => 'required|numeric',
                'age' => 'required|numeric',
                'gender' => 'required',
                'weigh' => 'required',
                'blood_id' => 'required',
            ]
        );
        $updatedData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'city' => $validatedData['city'],
            'country' => $validatedData['country'],
            'personal_number' => $validatedData['personal_number'],
            'age' => $validatedData['age'],
            'gender' => $validatedData['gender'],
            'weigh' => $validatedData['weigh'],
            'blood_id' => $validatedData['blood_id'],
            'image' => $profile_photo,
        ];
        $user = User::findOrFail($id);
        $user->update($updatedData);

        return redirect(route('home'))->with('success', "Profile updated succesfully!");
//            if ($course == True) {
//                return response()->json([
//                    'status' => "success",
//                    'message' => 'The course updated successfully',
//                    'url' => route('course.index'),
//                    'action' => 'update'
//                ]);
//            } else {
//                return response()->json([
//                    'status' => "danger",
//                    'message' => 'The course is not updated successfully',
//                    'url' => route('course.index'),
//                    'action' => 'update'
//                ]);
//            }
    }

    public function newBloodGroup()
    {
        $bloods = Blood::all();
        return view('pages.newbloodGroup', ['bloods' => $bloods]);
    }

    public function saveBloodGroup(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => 'required',
            ]
        );

        $newBlood = new Blood();
        $newBlood->name = $validatedData['name'];
        $newBlood->save();
        return redirect(route('bloodGroup'))->with('success', "New Blood Group Added Successfully!");

    }

    public function deleteBloodGroup($id)
    {
        $blood = Blood::findOrFail($id);
        $blood->delete();
        $bloods = Blood::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Blood deleted succesfully!',
            'url' => route('bloodGroup'),
            'table' => View::make('pages.bloodTable',['bloods'=>$bloods])->render()]);
//        return redirect(route('course.index'))->with('success','Course deleted succesfully!');
    }

    public function addUser(){
        $blood_groups = Blood::all();
        return view('pages.newEditUser',['blood_groups'=>$blood_groups]);
    }
    public function saveUser(Request $request){
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'city' => 'required',
                'country' => 'required|string',
                'personal_number' => 'required|numeric',
                'age' => 'required|numeric',
                'gender' => 'required',
                'weigh' => 'required',
                'blood_id' => 'required',
                'role'=>'required',
                'status'=>'required',
                'password'=>'required|string|min:8|confirmed'
            ]
        );
        $newUser = new User();
            $newUser->name =  $validatedData['name'];
        $newUser->email =  $validatedData['email'];
        $newUser->city =  $validatedData['city'];
        $newUser->country =  $validatedData['country'];
        $newUser->personal_number =  $validatedData['personal_number'];
        $newUser->age =  $validatedData['age'];
        $newUser->weigh =  $validatedData['weigh'];
        $newUser->blood_id =  $validatedData['blood_id'];
        $newUser->gender =  $validatedData['gender'];
        $newUser->role =  $validatedData['role'];
        $newUser->status =  $validatedData['status'];
        $newUser->password =  Hash::make($validatedData['status']);

        $newUser->save();

        return redirect('/home')->with('success','User Added Successfully');

    }
    public function users(){
        $users = User::all();
        return view('pages.users',['users'=>$users]);
    }

    public function editUser($id){
        $user = User::findOrFail($id);
        $blood_groups = Blood::all();
        return view('pages.newEditUser',['blood_groups'=>$blood_groups,'user'=>$user]);
    }

    public function updateUser(Request $request, $id){
        $validatedData = $request->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'city' => 'required',
                'country' => 'required|string',
                'personal_number' => 'required|numeric',
                'age' => 'required|numeric',
                'gender' => 'required',
                'weigh' => 'required',
                'blood_id' => 'required',
                'role'=>'required',
                'status'=>'required',
            ]
        );
        $updatedData = [
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'city' => $validatedData['city'],
            'country' => $validatedData['country'],
            'personal_number' => $validatedData['personal_number'],
            'age' => $validatedData['age'],
            'gender' => $validatedData['gender'],
            'weigh' => $validatedData['weigh'],
            'blood_id' => $validatedData['blood_id'],
            'status' => $validatedData['status'],
            'role' => $validatedData['role'],
        ];
        $user = User::findOrFail($id);
        $user->update($updatedData);

        return redirect(route('home'))->with('success', "User updated succesfully!");
    }
    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
        $users = User::all();

        return response()->json([
            'status' => 'success',
            'message' => 'User deleted succesfully!',
            'url' => route('users'),
            'table' => View::make('pages.usersTable',['users'=>$users])->render()]);
    }
}
