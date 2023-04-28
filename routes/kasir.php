<?php

use App\Http\Controllers\Kasir\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('home',HomeController::class)->name('.index');
