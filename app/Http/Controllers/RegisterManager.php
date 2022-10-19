<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Manager;
use Hash;
use Illuminate\Support\Facades\Validator;

class RegisterManager extends Controller
{
    public function index(){
        $sessionData = array();
        if(Session::has('loginId')){
            $sessionData = Manager::where('manager_id', '=', Session::get('loginId'))->first();
        }
        return view('manager_registration', compact('sessionData'));
    }
    public function registerManager(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:191',
            'email'=>'required|email|max:191',
            'phone'=>'required|max:10|min:10',
            'password'=>'required|max:191|min:8',
            'cpassword'=>'required|max:191|min:8|',
        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }else{
            $manager = new Manager;
            $manager->username = $request->input('name');
            $manager->email = $request->input('email');
            $manager->phone_number = $request->input('phone');
            $manager->password = Hash::make($request->input('password'));
            $manager->role_id = 3;
            $manager->save();
            return response()->json([
                'status'=>200,
                'message'=>'Manager Registered Successfully',
            ]);

        }
        
    
    }
    

}
