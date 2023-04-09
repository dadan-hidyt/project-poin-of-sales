<?php
namespace App\Services;
class KariawanService{
    public function uploadHandle($request){
        if($request->file('avatar')->store('avatar/'.$request->nik,'public')){
            return true;
        } else {
            return false;
        }

    }
}