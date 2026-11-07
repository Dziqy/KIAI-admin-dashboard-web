<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }

    public function authenticate(Request $request){
        
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])){
            if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password'], 'status' => 0])) {
                Auth::logout();
                request()->session()->invalidate();
                request()->session()->regenerateToken();
                $request->session()->flash('loginError', 'Akun anda sedang dalam proses verivikasi! Tunggu 1x24 jam');
                return redirect('/login');
            }
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        //     'password' => 'pass gagal',
        //     'status' => 'ga aktif bray'
        // ]);

        return back()->with('loginError', 'Login Gagal!');
    }

    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }

}