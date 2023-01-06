<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ChangePassword extends Controller
{
    //
    public function index(){
        return view('change_password');
    }

    public function changePassword(Request $request){
        $request->validate([
            'email' => 'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|min:8',
        ]);

        $user = Manager::where('email', $request->email)->first();

        if($user){
            if($request->new_password == $request->confirm_password){
                $user->password = Hash::make($request->new_password);
                $user->save();
                // Auth::logout();
                return redirect()->route('login-user')->with('success','Password changed successfully');
            }else{
                return back()->with('fail','New password and confirm password does not match');
            }
        }
        else{
            return back()->with('fail','We do not recognize your email address');
        }

    }
    }

