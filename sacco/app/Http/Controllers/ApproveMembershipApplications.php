<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\MembershipApplication;
use Illuminate\Support\Facades\Session;
use App\Models\Manager;

class ApproveMembershipApplications extends Controller
{
    public function index(){
        $sessionData = array();
        if(Session::has('loginId')){
            $sessionData = Manager::where('manager_id', '=', Session::get('loginId'))->first();
        }

        $data = DB::table('membership_applications')->get();
        return view('manager_files/approve_membership_applications', compact('data','sessionData'));
    }
}
