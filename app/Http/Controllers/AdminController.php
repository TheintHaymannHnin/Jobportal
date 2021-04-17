<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function landing()
    {
       return view('admins.landing');
    }

    public function userIndex()
    {
        return view('admins.users.index',[
            'users' => User::all(),
            ]);
    }

    // company user action
    public function sendVoucherToAdmin($companyUserId)
    {
        request()->validate([
            'voucher' => 'required',
        ]);
        $voucher = request()->voucher;
        $voucherName = uniqid().'_'.$voucher->getClientOriginalName();
        $voucher->storeAs("voucher-images",$voucherName);

        User::findOrFail($companyUserId)->update([
            'status' => 'request',
            'voucher' => $voucherName,
        ]);
        return back();
    }

    // admin user action
    public function approveCompany($companyUserId)
    {  
        // dd(Carbon::now()->addSeconds(60));
       User::findOrFail($companyUserId)->update([
           'status' => 'accepted',
           'approve_date'=>Carbon::now()->addSeconds(60)//expired date
           
       ]);
       return back();
    }
}
