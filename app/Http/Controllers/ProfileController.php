<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Alert;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function index(User $user_id)
    {
        $user = Auth::user();
        $dasbor = DB::select('select * from orders where user_email = ?', [Auth::user()->email]);
        return view('profile', compact('user', 'dasbor'));
    }

    public function updateProfile(User $user_id, Request $request){
        $user = Auth::user();
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

    public function updatePassword(Request $request, User $user){
        Hash::check(request('current_password'), Auth::user()->password);
        if(Hash::check(request('current_password'), Auth::user()->password)){
            if(request('password') == request('confirm_password')){
                $user = DB::update('update users set name = ?, email = ?, password = ?, nickname = ?, aboutme = ?, github = ?, linkedin = ? where email = ?', [Auth::user()->name, Auth::user()->email, Hash::make(request('password')), Auth::user()->nickname, Auth::user()->aboutme, Auth::user()->github, Auth::user()->linkedin, Auth::user()->email]);
                return back()->withSuccess('Success to change your password.');
            }
            else{
                return back()->withSuccess('Your new password and confirmation password is different.');
            }
        }
        else {
            return back()->withSuccess('Your current password is wrong.');
        }
    }
}
