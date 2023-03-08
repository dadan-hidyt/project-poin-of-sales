<?php
use App\Http\Controllers\Backend\Produk\ItemController;
use Illuminate\Support\Facades\Route;
/**
 * halaman dashboard
 */
Route::get('/',[DashboardController::class,'index'])->name('.index');
#product
Route::prefix('produk')->name('.product')->group(function(){
   Route::get('item',[ItemController::class,'index'])->name('.item');
});