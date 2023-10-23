<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PageController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;


//     public function home(){
//         return view('pages.home');
//     }
//   // Import the Product model

public function index()
{
    $products = Products::all(); // Retrieve all products from the database
    // return view('pages.home', ['products' => $products]);
    return view('pages.home', compact('products'));
}

}
