<?php
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    #login kasir
    Route::name('.kasir')->get('/kasir', function () {
        return [];
    });
    #login backend
    Route::name('.backend')->get('/backend',function(){
        return [];
    });
});