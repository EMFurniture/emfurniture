<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartController extends Controller
{
     // Display the cart page
     public function index()
     {
         $cart = session()->get('cart', []); // Get the cart from session, or an empty array
         return view('frontend.cart.index', compact('cart'));
     }
 
     // Add product to cart
     public function addToCart($id)
     {
         $product = Product::findOrFail($id);
 
         // Retrieve the cart from the session (or initialize it if it doesn't exist)
         $cart = session()->get('cart', []);
 
         // Check if the product already exists in the cart
         if (isset($cart[$id])) {
             $cart[$id]['quantity']++;
         } else {
             // Add the product to the cart
             $cart[$id] = [
                 'name' => $product->product_name,
                 'quantity' => 1,
                 'price' => $product->price,
                 'image_url' => $product->image_url,
             ];
         }
 
         // Store the updated cart in the session
         session()->put('cart', $cart);
 
         // Redirect back to the products page with success message
         return redirect()->back()->with('success', 'Product added to cart!');
     }
 
     // Remove a product from the cart
     public function removeFromCart($id)
     {
         $cart = session()->get('cart', []);
 
         // Remove the product from the cart if it exists
         if (isset($cart[$id])) {
             unset($cart[$id]);
             session()->put('cart', $cart);
         }
 
         return redirect()->route('cart.index')->with('danger', 'Product removed from cart.');
     }
 
     // Update the quantity of a product in the cart
     public function updateCart(Request $request, $id)
     {
         $cart = session()->get('cart', []);
 
         if (isset($cart[$id])) {
             $cart[$id]['quantity'] = $request->quantity;
             session()->put('cart', $cart);
         }
 
         return redirect()->route('cart.index')->with('info', 'Cart updated!');
     }
}
