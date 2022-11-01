<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {

        if ($user = Auth::user()) {
            // dd($user);
            if ($user->role_id == 1) {
                return redirect()->intended('admin');
            } elseif ($user->role_id == 2) {
                return redirect()->intended('writer');
            } elseif ($user->role_id == 3) {
                return redirect()->intended('reader');
            }
        }

        return view('login');
    }

    public function proses_login(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

            $credential = $request->only('username','password');
            // dd($credential);

            if (Auth::attempt($credential)) {
                $user = Auth::user();
                if ($user->role_id == 1) {
                    return redirect()->intended('admin');
                } elseif ($user->role_id == 2) {
                    return redirect()->intended('writer');
                } elseif ($user->role_id == 3) {
                    return redirect()->intended('reader');
                }
                return redirect()->intended('/');
            }

        return redirect('login')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }
}

