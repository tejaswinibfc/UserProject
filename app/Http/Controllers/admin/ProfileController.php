<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        return view("profile");
    }

    // public function updateProfile(Request $request)
    // {

    //     $id = Auth::user()->id;

    //     $input=$request->validate($request->all(),[
    //         'name' => 'required',
    //         'email' => 'required|unique:users,email'.$id,
    //         'phone' => 'required',
    //         'address' => 'required'
    //     ]);

    //     User::where('id',$id)->update($input);
    //      return redirect('profile')->with('success', "Profile updated Successfully");

    //     // if ($validator->passes()) {

    //     //     $formdata['name'] = $request->name;
    //     //     $formdata['email'] = $request->email;
    //     //     $formdata['mobile'] = $request->mobile;

    //     //     $res = User::where('id', $id)->update($formdata);

    //     //     if ($res) { 
    //     //         return redirect('profile')->with('success', "Profile updated Successfully");
    //     //     } else {

    //     //         return redirect('profile')->with('error', "Invalid credentials");
    //     //     }
    //     // }

    //     // return redirect('profile')->with('success', "Profile updated Successfully");
    // }

    public function updateProfile(Request $request)
    {

        $id = Auth::user()->id;
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['mobile'] = $request->phone;
        $data['address'] = $request->address;

        $res = User::where('id', $id)->update($data);

        if ($res) {
            return redirect('profile')->with('success', "Profile updated Successfully");
        } else {

            return redirect('profile')->with('error', "Invalid credentials");
        }
    }

    public function updateImage(Request $request)
    {
        $id = Auth::user()->id;
        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $filename = Auth::user()->name . '_' . str_replace(' ', '_', $name);
            $request->file('image')->move(public_path('profileimage/'), $filename);
            $data['image'] = $filename;
            User::where('id', $id)->update($data);

            return response()->json([
                'success' => true,
                'image_path' => url('profileimage/' . $filename),
                'message' => "Profile uploaded successfully"
            ]);
        }
    }

    public function updatePassword(Request $request)
    {
           $request->validate([
            'old_password'=>"required",
            'new_password'=>"required",
            'confirm_password'=>"required",
           ]);


         if(Hash::check($request->old_password,Auth()->user()->password)){
             if(!Hash::check($request->new_password,Auth()->user()->password)){
                 $user=User::find(Auth()->id());
                    $user->update([
                        'password'=>bcrypt($request->new_password)
                    ]);
                    return redirect('profile')->with('success',"Password changed successfully");
             }
             return redirect('profile')->with('error',"not match");
         }
         return redirect('profile')->with('error',"Old password does not match ");
        
    }
}
