<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    /**
     * Login with pin
     */
    Route::name('.login_with_pin')->get("login/kasir",function(){
        return [];
    });
    Route::name('.login_password')->get('login/dashboard',function(){
        return [];
    });
});