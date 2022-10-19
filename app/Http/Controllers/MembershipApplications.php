<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MembershipApplication;
use Illuminate\Support\Facades\Validator;

class MembershipApplications extends Controller
{
    public function index(){
        return view('membership_applications');
    }
    public function storeMembershipApplication(Request $request){
        $validator = Validator::make($request->all(),[
            'name'=>'required|max:191',
            'idNumber'=>'required',
            'idImage'=>'required',
            'email'=>'required|email|max:191',
            'phone'=>'required|max:10|min:10',
            'churchMembershipNumber'=>'required',
            'department'=>'required',
            'service'=>'required',

        ]);

        if($validator->fails())
        {
            return response()->json([
                'status'=>400,
                'errors'=>$validator->messages(),
            ]);
        }else{
            $name = $request->input('idImage');
            $request->file('idImage')->store('public/images/');

            $membershipApplication = new MembershipApplication;
            $membershipApplication->name = $request->input('name');
            $membershipApplication->idNumber = $request->input('idNumber');
            $membershipApplication->idImage = $name;
            $membershipApplication->email = $request->input('email');
            $membershipApplication->phone = $request->input('phone');
            $membershipApplication->churchMembershipNumber = $request->input('churchMembershipNumber');
            $membershipApplication->department = $request->input('department');
            $membershipApplication->service = $request->input('service');
            $membershipApplication->save();
            return response()->json([
                'status'=>200,
                'message'=>'Application successful,you will receive an email on the status of your application within 7 working days',
            ]);

        }
        
    
    }

}
