<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewRepayments;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\MemberRegistration;
use App\Http\Controllers\BorrowedLoans;
use App\Http\Controllers\Contribute;
Use App\Http\Controllers\MemberShares;
Use App\Http\Controllers\MemberAuthentication;
Use App\Http\Controllers\Login;
use App\Http\Controllers\ApplyLoan;
Use App\Http\Controllers\RegisterManager;
use App\Http\Controllers\MembershipApplications;
use App\Http\Controllers\ApproveMembershipApplications;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});
Route:: view("login","login");
Route::get("view_repayments", [ViewRepayments::class,'index']);
Route::get("borrowed_loans", [BorrowedLoans::class,'index']);
Route::get("contribute", [Contribute::class,'index']);
Route::get("member_shares", [MemberShares::class,'index']);
Route::post('/register-member',[MemberRegistration::Class,'registerMember'])->name ('register-member');
Route::post('/login-user',[Login::Class,'loginUser'])->name ('login-user');
Route::get('/member_dashboard',[Login::class,'member_dashboard']);
Route::get('dashboard',[Login::class,'dashboard']);
Route::post('/apply-loan',[ApplyLoan::Class,'applyLoan'])->name ('apply-loan');
Route::get("manager_registration", [RegisterManager::class,'index']);
Route::post('manager_registration',[RegisterManager::Class,'registerManager']);
Route::get("membership_applications", [MembershipApplications::class,'index']);
Route::post('membership_applications',[MembershipApplications::Class,'storeMembershipApplication']);
Route::get("approve_membership_applications", [ApproveMembershipApplications::class,'index']);
Route::post('approve_membership_applications',[ApproveMembershipApplications::Class,'storeMembershipApplication']);


//Route::get('/registration',[MemberAuthentication::class,'registration']);
//Route::get('/login',[MemberAuthentication::class,'login']);

//Route:: view("dashboard","dashboard");

