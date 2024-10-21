<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        // Fetch all products with their associated category and supplier (if needed)
        $products = Product::with('category', 'supplier')->get();

        // Pass products to the view
        return view('frontend.products.index', compact('products'));
    }
}
