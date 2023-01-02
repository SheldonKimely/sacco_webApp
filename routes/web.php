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
use App\Http\Controllers\ChangePassword;

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
Route::post('/register-member',[MemberRegistration::class,'registerMember'])->name ('register-member');
Route::post('/login-user',[Login::class,'loginUser'])->name ('login-user');
Route::get('/member_dashboard',[Login::class,'member_dashboard']);
Route::get('dashboard',[Login::class,'dashboard']);
Route::post('/apply-loan',[ApplyLoan::class,'applyLoan'])->name ('apply-loan');
Route::get("manager_registration", [RegisterManager::class,'index']);
Route::post('manager_registration',[RegisterManager::class,'registerManager']);
Route::get("membership_applications", [MembershipApplications::class,'index']);
Route::post('membership_applications',[MembershipApplications::class,'storeMembershipApplication']);
Route::get("approve_membership_applications", [ApproveMembershipApplications::class,'index']);
Route::post('approve_membership_applications',[ApproveMembershipApplications::class,'storeMembershipApplication']);

Route::get("change_password", [ChangePassword::class,'index']);
Route::post('change_password',[ChangePassword::class,'changePassword']);


//Route::get('/registration',[MemberAuthentication::class,'registration']);
//Route::get('/login',[MemberAuthentication::class,'login']);

//Route:: view("dashboard","dashboard");

