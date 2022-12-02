<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        if(Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            if(Auth::guard('admin')->user()->status_aktivasi === 1) {
                return redirect(route('admin.dashboard.index'));
            }else{
                Auth::guard('admin')->logout();
                return back()->with('error', 'Akun anda belum aktif!');
            }
        }
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            if(Auth::user()->status_aktivasi === 1) {
                return redirect(route('users.dashboard.index'));
            }else{
                Auth::logout();
                return back()->with('error', 'Akun anda belum aktif!');
            }
        }
        return back()->with('error', 'Username atau Password salah!');
    }
}
