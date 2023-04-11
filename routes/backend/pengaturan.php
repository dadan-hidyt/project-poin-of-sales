<?php

use App\Http\Controllers\Backend\PengaturanController;
use Illuminate\Support\Facades\Route;
//
Route::get('struk', [PengaturanController::class,'struk'])->name('.struk');
