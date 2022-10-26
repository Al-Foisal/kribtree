<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserDashboardController extends Controller
{
    public function dashboard()
    {
        $data = [];
        return view('frontend.pages.user.dashboard',$data);
    }

    public function profile()
    {
        return view('frontend.pages.user.profile');
    }

    public function updateProfile(Request $request)
    {
        $data = $request->except('email');
        auth()->user()->update($data);

        return back()->withToastSuccess('Your profile updated successfully');
    }
}
