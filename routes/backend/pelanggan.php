<?php

use App\Http\Controllers\Backend\PelangganController;
use App\Models\Pelanggan;
use Illuminate\Support\Facades\Route;
Route::get('/',[PelangganController::class,'index'])->name('.show');
Route::post('/data/get-records',[PelangganController::class,'datatable'])->name('.datatable');
Route::get('/{id_pelanggan}/delete',[PelangganController::class,'delete'])->name('.delete');
Route::get('/{id_pelanggan}/update',[PelangganController::class,'update'])->name('.update');
