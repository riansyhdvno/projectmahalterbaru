<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home', ['title' => 'SigmaGem Consign']);
});

Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
});

Route::get('/admin/category', function() {
    return view('admin.category.index');
});

Route::get('/categories', [CategoryController::class, 'index']);
