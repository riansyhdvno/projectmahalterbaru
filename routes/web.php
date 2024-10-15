<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

// Route::get('/', function () {
//     return view('home', ['title' => 'SigmaGem Consign']);
// });

//sementera
Route::get('/product/mouse', function () {
    return view('product.mouse');
})->name('product.mouse');

Route::get('/product/keyboard', function () {
    return view('product.keyboard');
})->name('product.keyboard');

Route::get('/product/headset', function () {
    return view('product.headset');
})->name('product.headset');

Route::get('/product/detail', function () {
    return view('product.detail');
})->name('product.detail');
//sementara

Route::get('/', [CategoryController::class, 'index']);

Route::get('/admin/dashboard', function() {
    return view('admin.dashboard');
});

Route::get('/admin/category', function() {
    return view('admin.category.index');
});

Route::get('/products/{id}', function ($id) {
    // Ambil produk berdasarkan id
    $product = Product::findOrFail($id);

    // Kirim data produk ke view
    return view('product', ['products' => $product]);
});

Route::get('/product', function () {
    return view('product', ['title' => 'SigmaGem Consign']);
});

// Route::get('/products', [ProductController::class, 'index']);

// Route::get('/product/{category:id}', function() {
//     return view('product');
// });

// Route::get('/categories', [CategoryController::class, 'showCategories']);
