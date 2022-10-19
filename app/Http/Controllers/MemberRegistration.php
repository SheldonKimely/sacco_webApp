<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Hash;

class MemberRegistration extends Controller
{
    public function index(){
        return view('member_registration');
    }
    public function registerMember(Request $request){
        $request->validate([
            'fname'=>'required',
            'nid'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'password'=>'required',
            'cpassword'=>'required'
        ]);

        $user = new Member();
        $user->fname = $request->fname;
        $user->nid = $request->nid;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'Registration successfull,proceed to login');
        }else{
            return back()->with('fail','Registration Unsuccessful');
        }


    
        }
    
}
