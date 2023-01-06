<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\Member;
use App\Models\Manager;
// Use Hash;

class Login extends Controller
{
    public function index(){
        return view('login');
    }
    public function loginUser(Request $request){
        $userMember = Member::where('nid', '=', $request->email)->first();
        $userManager = Manager::where('email', '=', $request->email)->first();
        if($userMember){
            if (Hash::check($request->password,$userMember->password )){
                $request->session()->put('loginId',$userMember->id);
                return redirect('member_dashboard');
            }else{
                return back()->with('fail','Incorrect Email or Password, Member. Please try again.'); 
            }
        }else if($userManager){
            if (Hash::check($request->password,$userManager->password )){
                $request->session()->put('loginId',$userManager->manager_id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Incorrect Email or Password, Manager. Please try again'); 
            }
        }else{
            return back()->with('fail','Email does not exist');
        }
    }
    public function member_dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = Member::where('id', '=', Session::get('loginId'))->first();
        }
        return view('member_dashboard',compact('data'));
    }
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            $data = Manager::where('manager_id', '=', Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }
}
