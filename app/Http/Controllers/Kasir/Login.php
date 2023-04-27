<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function __invoke()
    {
        $this->setTitle("Login kasir");
        return view('kasir.login');
    }
}
