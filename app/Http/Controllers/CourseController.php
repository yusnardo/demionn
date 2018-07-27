<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
use Illuminate\Support\Facades\Validator;

class CourseController extends Controller
{
    public function index()
    {
    	if(Auth::Check()) {
    		$user_payment = DB::select('select isPaid from orders where user_email = ?', [Auth::user()->email]);
        	return view('course', compact('user_payment'));
    	}
    	else{
    		return view('course');	
    	}      
    }

    public function payment(User $user_id, Request $request){
		$user_id = DB::insert('insert into orders (user_email, sender_name, course_name, course_price) values (?, ?, ?, ?)', [Auth::user()->email, request('sender_name'), '1', request('nominal')]);
		return back()->withSuccess('Demion will verify your payment. If verify is done, you can read our module in Dasbor menu.');
	}

}
