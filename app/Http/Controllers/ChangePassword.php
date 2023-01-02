<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ChangePassword extends Controller
{
    //
    public function index(){
        $sessionData = array();
        if (Session::has('loginId')) {
            $sessionData = Member::where('id', '=', Session::get('loginId'))->first();
        }
        return view('change_password', compact('sessionData'));
    }

    public function changePassword(Request $request){
        $request->validate([
            'email'=>'required',
            'old_password'=>'required',
            'new_password'=>'required',
            'confirm_password'=>'required'
        ]);

        $user = Member::where('email', '=', $request->email)->first();
        // $user = Member::find(Auth::user()->id);
        $hashedPassword = $user->password;
        if(Hash::check($request->old_password,$hashedPassword)){
            if(!Hash::check($request->new_password,$hashedPassword)){
                if($request->new_password == $request->confirm_password){
                    $user->password = Hash::make($request->new_password);
                    $user->save();
                    Auth::logout();
                    return redirect()->route('/login-user')->with('success','Password changed successfully');
                }else{
                    return back()->with('fail','New password and confirm password does not match');
                }
            }
        }

    }
    }

