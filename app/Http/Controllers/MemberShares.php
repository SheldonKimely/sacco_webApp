<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Share;

class MemberShares extends Controller
{
    public function index(){
        $data = Share::join('members','members.nid', '=', 'shares.nid')
        ->orderBy('shares.id', 'DESC') 
        ->get(['shares.id','shares.nid','shares.date_paid','shares.amount','shares.contribution',
               'members.nid','members.address','members.fname','members.phone','members.membership_type']);
       
        return view('member_shares', compact('data'));
    }
}
