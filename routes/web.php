<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', function (): View {
    return view('welcome');
});

Route::resource('customers', CustomerController::class);
