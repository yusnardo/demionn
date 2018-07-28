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
    	$course = DB::select('select * from course');
    	if(Auth::Check()) {
    		$user_payment = DB::table('orders')->where('user_email', Auth::user()->email)->value('isPaid');
    		$course_title = DB::table('orders')->where('user_email', Auth::user()->email)->value('course_title');
        	return view('course', compact('user_payment','course','course_title'));
    	}
    	else{
    		return view('course', compact('course'));
    	}
    	    
    }

    public function payment(User $user_id, Request $request){
		$user_id = DB::insert('insert into orders (user_email, sender_name, course_name, course_title, course_description, course_price, course_link) values (?, ?, ?, ?, ?, ?, ?)', [Auth::user()->email, request('sender_name'), request('course_name'), request('course_title'), request('course_description'), request('course_price'), request('course_link')]);
		
		return back()->withSuccess('Demion will verify your payment. If verify is done, you can read our module in Dasbor menu.');
	}

}
