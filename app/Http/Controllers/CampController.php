<?php

namespace App\Http\Controllers;

use App\Blood;
use App\Camp;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class CampController extends Controller
{
    public function addCamp(){
        return view('pages.newEditCamp');
    }

    public function saveCamp(Request $request){
        $camp_photo= "";
        if (!empty($request->file('image'))) {
            $uploadedFile = $request->file('image');
            $camp_photo = time() . $uploadedFile->getClientOriginalName();
            Storage::disk('local')->putFileAs(
                'public/camp_photo/',
                $uploadedFile,
                $camp_photo
            );
        }
        $validatedData = $request->validate(
            [
                'title' => 'required',
                'city' => 'required',
                'details' => 'required',
                'state'=>'required',
            ]
        );
        $newCamp = new Camp();
        $newCamp->title =  $validatedData['title'];
        $newCamp->city =  $validatedData['city'];
        $newCamp->details =  $validatedData['details'];
        $newCamp->state =  $validatedData['state'];
        $newCamp->image = $camp_photo ;

        $newCamp->save();

        return redirect('/home')->with('success','Camp Added Successfully');

    }
    public function camps(){
        $camps = Camp::all();
        return view('pages.camps',['camps'=>$camps]);
    }

    public function editCamp($id){
        $camp = Camp::findOrFail($id);
        return view('pages.newEditCamp',['camp'=>$camp]);
    }
    public function updateCamp(Request $request ,$id){
        $camp = Camp::findOrFail($id);
        $camp_photo = $camp->image;
        if (!empty($request->file('image'))) {
            $uploadedFile = $request->file('image');
            $camp_photo = time() . $uploadedFile->getClientOriginalName();
            Storage::disk('local')->putFileAs(
                'public/camp_photo/',
                $uploadedFile,
                $camp_photo
            );
        }
        $validatedData = $request->validate(
            [
                'title' => 'required',
                'city' => 'required',
                'details' => 'required',
                'state'=>'required',
            ]
        );
        $updatedData = [
            'title' => $validatedData['title'],
            'city' => $validatedData['city'],
            'state' => $validatedData['state'],
            'details' => $validatedData['details'],
            'image'=>$camp_photo
        ];
        $camp->update($updatedData);

        return redirect('/home')->with('success','Camp Updated Successfully');

    }
    public function deleteCamp($id)
    {
        $camp = Camp::findOrFail($id);
        $camp->delete();
        $camps = Camp::all();

        return response()->json([
            'status' => 'success',
            'message' => 'Camp deleted succesfully!',
            'url' => route('camps'),
            'table' => View::make('pages.campTable',['camps'=>$camps])->render()]);
//        return redirect(route('course.index'))->with('success','Course deleted succesfully!');
    }


}
