<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('pages.productdetails', compact('products'));


    }

    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('products.products-show', ['product' => $product]);
    }

    public function addRelatedProducts(Request $request, $productId)
    {
        $product = Products::find($productId);

        $relatedProductIds = $request->input('related_product_ids');

        // Assuming you have a many-to-many relationship between products
        // and a pivot table named 'related_products'
        $product->relatedProducts()->sync($relatedProductIds);

        return redirect()->back()->with('success', 'Related products added successfully.');
    }
}
