<?php

use App\Http\Controllers\Backend\AkunSayaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AkunSayaController::class,'index']);