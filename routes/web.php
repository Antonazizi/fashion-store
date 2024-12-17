<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;


Route::get('/', [ProductController::class, 'index'])->name('index');

Route::get('/contact', function () { return view('contact'); } );

Route::get('/faq', function () { return view('faq'); });

Route::get('/about', function () { return view('about-us'); });

Route::get('/login', function () { return view('login'); });

Route::get('/register', function () { return view('register'); });

Route::get('/shop', function () {
    $products = Product::all();
    $perPage = 12;
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $currentItems = $products->slice(($currentPage - 1) * $perPage, $perPage)->values();
    
    $paginatedProducts = new LengthAwarePaginator(
        $currentItems,
        $products->count(),
        $perPage,
        $currentPage,
        ['path' => Request::url()]
    );

    return view('shop', [
        'products' => $paginatedProducts
    ]);
});

Route::get('/shop/{id}', function ($id) {
    $products = Product::all();
    $product = $products->firstWhere('id', $id);

    if (!$product) {
        abort(404, 'Product not found');
    }

    return view('product', [
        'product' => $product
    ]);
});

Route::get('/sales', function () {
    $products = Product::all();
    $saleProducts = $products->filter(function ($product) {
        return !is_null($product['sale']);
    });
    $perPage = 12;
    $currentPage = LengthAwarePaginator::resolveCurrentPage();
    $currentItems = $saleProducts->slice(($currentPage - 1) * $perPage, $perPage)->values();

    $paginator = new LengthAwarePaginator(
        $currentItems, 
        $saleProducts->count(), 
        $perPage,
        $currentPage,
        ['path' => LengthAwarePaginator::resolveCurrentPath()] 
    );

    return view('sale', [
        'products' => $paginator
    ]);
});

Route::get('/shopping-cart', function () { return view('shopping-cart', [
    'products' => Product::all(), ]); 
});

Route::get('/wishlist', function () {
    return view('wishlist', [
        'products' => Product::all(), 
    ]);
});


// --------- ADMIN SECTION ---------

Route::get('/admin', function () {
    return view('admin\dashboard', [
        'products' => Product::all(),
    ]);
});


Route::get('/admin/products', function () {
    return view('admin\products', [
        'products' => Product::all(),
    ]);
});

Route::get('admin/edit-product/{id}', [ProductController::class, 'edit'])->name('products.edit');


Route::get('/admin/add-product', function () { return view('admin\add-product'); });

Route::get('/admin/stock', [ProductController::class, 'lowStockProducts'])->name('lowStockProducts');


Route::get('/admin/orders', function () {
    return view('admin\orders', [
        'products' => Product::all(),
    ]);
});


Route::get('/admin/new-orders', function () {
    return view('admin\new-orders', [
        'products' => Product::all(),
    ]);
});

Route::get('/admin/customers', function () {
    return view('admin/customers');
});

Route::get('/admin/gallery/homepage', function () {
    return view('admin/gallery/home');
});

Route::get('/admin/gallery/shop', function () {
    return view('admin/gallery/shop');
});

Route::get('/admin/gallery/sale', function () {
    return view('admin/gallery/sale');
});

Route::get('/admin/gallery/about-us', function () {
    return view('admin/gallery/about-us');
});

Route::get('/admin/gallery/payment', function () {
    return view('admin/gallery/payment');
});

Route::get('/admin/promotions', function () {
    return view('admin/promotions');
});

Route::get('/admin/notifications', function () {
    return view('admin/notifications');
});

Route::get('/admin/settings', function () {
    return view('admin/settings');
});