<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // public function admin_credential_rules(array $data)
    // {
    //     $messages = [
    //         'password.required' => 'Please enter current password',
    //         'new_password.required' => 'Please enter password',
    //     ];

    //     $validator = Validator::make($data, [
    //         'password' => 'required',
    //         'new_password' => 'required|same:new_password',
    //         'confirm_password' => 'required|same:new_password',     
    //     ], $messages);

    //     return $validator;
    // }  
    
    public function index(User $user_id)
    {
        $user = Auth::user();
        return view('profile', compact('user_id'));
    }

    public function updateProfile(User $user_id, Request $request){
        $user_id->name = request('name');
        $user_id->email = Auth::user()->email;
        $user_id->password = Auth::user()->password;
        $user_id->nickname = request('nickname');
        $user_id->aboutme = request('aboutme');
        $user_id->github = request('github');
        $user_id->linkedin = request('linkedin');

        $user_id = DB::update('update users set name = ?, email = ?, password = ?, nickname = ?, aboutme = ?, github = ?, linkedin = ? where email = ?', [request('name'), Auth::user()->email, Auth::user()->password, request('nickname'), request('aboutme'), request('github'), request('linkedin'), Auth::user()->email]);
        return back();
    }

    // public function updatePassword(User $user_id, Request $request){
    //     $this->validate($request, [
    //         'old' => 'required',
    //         'password' => 'required|min:6|confirmed',
    //     ]);
 
    //     $user = User::find(Auth::id());
    //     $hashedPassword = $user->password;
 
    //     if (Hash::check($request->old, $hashedPassword)) {
    //         //Change the password
    //         $user->fill([
    //             'password' => bcrypt($request->password)
    //         ])->save();
 
    //         $request->session()->flash('success', 'Your password has been changed.');
 
    //         return back();
    //     }
 
    //     $request->session()->flash('failure', 'Your password has not been changed.');
 
    //     return back();
    // }
}
