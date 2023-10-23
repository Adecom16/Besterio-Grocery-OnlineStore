<?php

namespace App\Http\Controllers;
use App\Models\Products;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
    public function show($id)
    {
        $product = Products::findOrFail($id);
        return view('pages.productdetails', ['product' => $product]);
    }
    public function post(Request $request){

        $request->validate([
            'title' => 'required|string',
            'picture'  => 'required|string',
            'price' => 'required|string',
            'description' => 'required',
            'quantity' => 'required|string',
            // 'company' => 'required|string',
            // 'category' => 'required|string',
            // 'oldprice' => 'required|string',
            // 'producttag' => 'required|string',
            // 'fulldescription' => 'required|string|min:3000',
            // 'imagelinks.*' => 'required|url',




           ], [
               'title.required' => "Product name is required",
               'picture.required' => "Picture url is required",
               'price.required' => "Price is required",
               'description.required' => "Description is required",
               'quantity.required' => "Quantity is required",
            //    'category.required' => "Cateqory is required",
            //    'company.required' => "Company is required",
            //    'oldprice.required' => "Oldprice is required",
            //    'producttag.required' => "Product identity Number is required",
            //    'fulldescription.required' => "Description is required",
            //    'imagelinks.required' => "Image links is required",





          ]);

        Products::create([
            'title'=> $request->title,
            'picture' => $request->picture,
            'price'=>$request->price,
            'description'=> $request->description,
            'quantity'=>$request->quantity,
            // 'category'=>$request->category,
            // 'company'=>$request->company,
            // 'oldprice'=>$request->oldprice,
            // 'quantity'=>$request->quantity



            ]);
            $message = 'Data saved successfully';

            return view('admin.create')->with('success', $message);
    }

    public function create()
    {
        return view('admin.create');
    }

    function index(){
        $products= Products::all();
        return  view('admin.producttable', compact(['products']));
    }


    public function edit($id)
    {
        $products= Products::find($id);
        return view('admin.edit', compact(['products']));
    }

    public function update(Request $request)

    {
        Products::where('id', $request->id)->update([
            'title'=>$request->title,
            'picture'=>$request->picture,
            'price'=>$request->price,
            'quantity'=>$request->quantity,
            'description'=>$request->description
        ]);
        return redirect('admin/products')->  with ('update successfully');


    }


    public function delete(Request $request){
        // return('working');
        Products::where('id', $request->id)->delete();
        return redirect('admin/products')->  with ("delete successfully");

    }




    // user admin

}
