<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Models\Loan_repayment;
use App\Models\Loan;
use App\Models\Manager;


class ViewRepayments extends Controller
{
    public function index(){
        $sessionData = array();
        if(Session::has('loginId')){
            $sessionData = Manager::where('manager_id', '=', Session::get('loginId'))->first();
        }

        $data = Loan::join('loan_repayments','loan_repayments.loan_id', '=', 'loans.id') ->get(['loans.nid','loans.groupname','loans.principal','loans.interest','loan_repayments.amount','loan_repayments.date_paid']);
        return view('view_repayments', compact('data','sessionData'));
    }

}
