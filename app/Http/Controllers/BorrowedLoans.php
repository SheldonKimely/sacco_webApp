<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;


class BorrowedLoans extends Controller
{
    public function index(){
        $first_data = Loan::join('members','members.nid', '=', 'loans.nid')
        ->where('loans.loan_status','=' ,'active') 
        ->get(['loans.id','loans.nid','loans.date_awarded','loans.principal','loans.interest','loans.amount','loans.loan_period','loans.loan_status',
               'members.id','members.fname','members.phone','members.membership_type']);

        $second_data = Loan::join('groups','groups.groupname', '=', 'loans.groupname')
        ->where('loans.loan_status','=' ,'active')
        ->get(['loans.groupname','loans.date_awarded','loans.principal','loans.interest','loans.amount','loans.loan_period','loans.loan_status',
               'groups.groupname']);
       
        return view('borrowed_loans', compact('first_data','second_data'));
    }
    
}
