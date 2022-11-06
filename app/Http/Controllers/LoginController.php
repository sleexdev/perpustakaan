<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login.index');
    }
    public function authenticate(Request $request){
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard/book');
        }
        return back()->with('failed', 'Login Gagal!');
    }
}
