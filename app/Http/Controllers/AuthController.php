<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginKasir(Request $request){
        $this->setTitle('Login Kasir');
    }
    public function loginBackend(Request $request){
        $this->setTitle('Login Backend');
        return view('auth.login_backend');
    }
    //login backend with email and password
    public function loginBackendCheck(Request $request){
        $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if ( Auth::attempt($request->only(['email','password'])) ) {
            return redirect(route('dashboard.index'));
        }
        else {
            return redirect(route('auth.login_backend'))->withErrors([
                'feedback' => [
                    'type' => 'error',
                    'message' => "Email dan password salah",
                ]
            ])->withInput();
        }

    }
}
