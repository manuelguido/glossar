<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth'); 
    }

    /*--------------------------------------------------------------
        Show user profile
    --------------------------------------------------------------*/
    public function showProfile(){
        return view('profile');
    }

    /*--------------------------------------------------------------
        Become a Pro(Paid) User
    --------------------------------------------------------------*/
    public function goPro(){
        
        $user = User::find(Auth::user()->user_id);
        $user->is_paid = 1;
        $user->save();

        return redirect()->back()->with('success', 'Congrats! Now you are a PRO <i class="fas fa-star warning"></i> user');
    }

    /*--------------------------------------------------------------
        Become a Free User
    --------------------------------------------------------------*/
    public function goFree(){
        
        $user = User::find(Auth::user()->user_id);
        $user->is_paid = 0;
        $user->save();

        return redirect()->back()->with('success', 'Now you are a Free user');
    }
}
