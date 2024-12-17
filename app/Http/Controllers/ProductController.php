<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        $latestProducts = $products->sortByDesc('created_at')->take(4);
        $mostPopularProducts = $products->sortByDesc('quantity')->take(4);

        return view('index', compact('latestProducts', 'mostPopularProducts'));
    }

    public function lowStockProducts(){
        $products = Product::all();
        $lowStockProducts = $products->filter(function ($product) {
            return $product['quantity'] < 3;
        });

        return view('admin/low-stock', compact('lowStockProducts'));
    }

    public function edit($id){
        $products = Product::all();
        $product = $products->firstWhere('id', $id);
        
        return view('admin/edit-product', compact('product'));
    }

}
