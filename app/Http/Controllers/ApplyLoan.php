<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AppliedLoan;

class ApplyLoan extends Controller
{
    public function index(){
        return view('apply_loan');
    }
    public function applyLoan(Request $request){


        $loan = new ApplyLoan();
        $loan->gamount = $request->gamount;
        $loan->gname = $request->gname;
        $loan->gnid = $request->gnid;
        $loan->gaddress = $request->gaddress;
        $loan->phone = $request->gphone;
        
        $res = $loan->save();
        if ($res) {
            return back()->with('success', 'Loan Application Successful');
        }else{
            return back()->with('fail','Application  Unsuccessful');
        }


    
        }
}
