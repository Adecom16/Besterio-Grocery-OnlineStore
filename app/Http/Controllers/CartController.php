<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $cart = $request->session()->get('cart', []);

        if (array_key_exists($productId, $cart)) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                'product_id' => $productId,
                'quantity' => 1,
            ];
        }

        $request->session()->put('cart', $cart);

        return redirect()->route('cart.view')->with('success', 'Product added to cart.');
    }

    public function index(Request $request)
    {
        $cartItems = $request->session()->get('cart', []);
        $total = 0;

        // Fetch product information for each item and calculate the total
        foreach ($cartItems as $item) {
            // Retrieve product information for $item['product_id'] and update $total
        }

        return view('cart.cart', compact('cartItems', 'total'));
    }

    public function remove(Request $request, $productId)
    {
        $cart = $request->session()->get('cart', []);

        if (array_key_exists($productId, $cart)) {
            unset($cart[$productId]);
            $request->session()->put('cart', $cart);
        }

        return redirect()->route('cart.view')->with('success', 'Item removed from cart.');
    }
}
