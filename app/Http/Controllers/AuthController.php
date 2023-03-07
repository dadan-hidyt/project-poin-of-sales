<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginKasir(Request $request){
        $this->setTitle('Login Kasir');
    }
    public function loginBackend(Request $request){
        $this->setTitle('Login Backend');
        return view();
    }
}
