<?php

namespace App\Http\Controllers;

use App\User;
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
    public function informToAdmin($companyUserId)
    {
        User::findOrFail($companyUserId)->update([
            'status' => 'request',
        ]);
        return back();
    }

    // admin user action
    public function approveCompany($companyUserId)
    {
       User::findOrFail($companyUserId)->update([
           'status' => 'accepted',
       ]);
       return back();
    }
}
