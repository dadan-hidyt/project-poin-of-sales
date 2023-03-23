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
Route::prefix('/produk')->name('.product')->group(function(){
   /**
    * ini adalah modul item untuk produk
    * @author dadan
    */
   Route::prefix('/item')->group(function(){
      Route::get('',[ItemController::class,'index'])->name('.item');
      Route::post('/get',[ItemController::class,'getDatatables'])->name('.item.datatable');
      Route::get('/get/kategori',[KategoriController::class,'getAjax'])->name('.item.ajax.kategori');
      Route::get('/get/varian',[VarianController::class,'getAjax'])->name('.item.ajax.varian');
      Route::get('/{kode_produk?}/delete',[ItemController::class,'delete'])->name('.item.delete');
      Route::get('/{kode_produk?}/update',[ItemController::class,'update'])->name('.item.update');
   });

});