<?php
use App\Http\Controllers\Backend\Produk\ItemController;
use App\Http\Controllers\Backend\Produk\KategoriController;
use App\Http\Controllers\Backend\Produk\VarianController;
use Illuminate\Support\Facades\Route;
/**
 * halaman dashboard
 */
Route::get('/',[DashboardController::class,'index'])->name('.index');
#product
Route::prefix('produk')->name('.product')->group(function(){
   Route::get('item',[ItemController::class,'index'])->name('.item');
   Route::post('item/get',[ItemController::class,'getDatatables'])->name('.item.datatable');
   Route::get('item/get/kategori',[KategoriController::class,'getAjax'])->name('.item.ajax.kategori');
   Route::get('item/get/varian',[VarianController::class,'getAjax'])->name('.item.ajax.varian');

});