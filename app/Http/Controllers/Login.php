<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Member;
use App\Models\Manager;
Use Hash;

class Login extends Controller
{
    public function index(){
        return view('login');
    }
    public function loginUser(Request $request){
        $userMember = Member::where('nid', '=', $request->username)->first();
        $userManager = Manager::where('email', '=', $request->username)->first();
        if($userMember){
            if (Hash::check($request->password,$userMember->password )){
                $request->session()->put('loginId',$userMember->id);
                return redirect('member_dashboard');
            }else{
                return back()->with('fail','Incorrect Password'); 
            }
        }else if($userManager){
            if (Hash::check($request->password,$userManager->password )){
                $request->session()->put('loginId',$userManager->manager_id);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Incorrect Password'); 
            }
        }else{
            return back()->with('fail','Username does not exist');
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
