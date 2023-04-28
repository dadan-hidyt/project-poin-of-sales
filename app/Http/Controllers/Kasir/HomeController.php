<?php

namespace App\Http\Controllers\Kasir;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function TutupKasir(){
        
    }
    public function __invoke()
    {
        return view('kasir.home');
    }
}
