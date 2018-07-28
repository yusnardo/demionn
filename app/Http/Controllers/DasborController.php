<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
use Illuminate\Support\Facades\Validator;

class DasborController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
    	$dasbor = DB::select('select * from orders where user_email = ?', [Auth::user()->email]);
    	//dd($dasbor);
        return view('dasbor', compact('dasbor', 'user_payment'));
    }
}
