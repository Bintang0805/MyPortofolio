<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// this Routes admin please don't touch




Route::get('admin', [AdminController::class, 'dashboard'])
        ->name('admin_dashboard');

