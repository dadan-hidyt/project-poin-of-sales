<?php

namespace App\Http\Controllers;

use Blade;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function kasir(){
        $kasir = auth()->user()->getKasir();
        return $kasir;
    }
    public function setTitle(string $title){
        /**
         * fungsi  ini untuk mengirim title ke blade
         * @author dadan hidayat <dadanhidyt@gmail.com>
         */
        view()->share('title',$title);
    }
}
