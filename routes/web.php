<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Models\Kategori;

Route::get('/', function () {
    $products = Product::with('Kategori')->paginate(3); // Mengambil semua data produk beserta kategori
    $categories = Kategori::all(); // Mengambil semua data kategori dari database
    return view('home', compact('products', 'categories'));
});