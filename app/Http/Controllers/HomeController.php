<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {

        $user = Auth::user();
        return view('home', compact(['user']));

    }

    public function edit()
    {
        $userId = Auth::id();
        $user= User::find($userId);
        return view('auth.edit', compact(['user']));
    }

    function update(Request $request){
        User::where('id', $request->id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
            'role'=> $request->role,
        ]);

        return redirect('/home')->  with ('update successfully');

    }
}
