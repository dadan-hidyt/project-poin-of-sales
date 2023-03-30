<?php

use App\Http\Controllers\Backend\PelangganController;
use Illuminate\Support\Facades\Route;
Route::get('/',[PelangganController::class,'index'])->name('.show');
Route::post('/datatables',[PelangganController::class,'datatable'])->name('.datatable');