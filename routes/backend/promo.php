<?php

use App\Http\Controllers\Backend\Promo\KuponController;
use Illuminate\Support\Facades\Route;
Route::prefix("kupon")->name('.kupon')->group(function(){
   Route::get('/',[KuponController::class, 'index'])->name("show");
   Route::post('/datatable',[KuponController::class, 'datatable'])->name(".datatable");
});

Route::prefix('poin')->name('.poin')->group(function(){

});