<?php

namespace App\Http\Controllers;

use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthenticationControllerBasic extends Controller
{
    //

    public function loginPageShow()
    {
        return view('Authentication.login');
    }

    public function loginAttempt(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            $user = Auth::user();
            $role = UserRole::find($user->role_id) ;
            if ($role->slug == 'super_admin')
            {
                return redirect()->route('dashboard');
            }else{
                Session::flush();
                Auth::logout();
                return redirect()->route('login');
            }

        } else {
            return back()->withErrors([
                'email' => 'Credentials do not match',
            ]);
        }
    }

    public function logOut(Request $request)
    {
        Session::flush();
        Auth::logout();
        return redirect('/');

    }
}
