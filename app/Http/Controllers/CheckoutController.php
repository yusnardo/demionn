<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user_id)
    {
        $user = Auth::user();
        return view('checkout', compact('user_id'));
    }
}
