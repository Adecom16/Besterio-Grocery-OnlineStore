<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;




    function index(){
        $users= User::all();
        return  view('User.usertable', compact(['users']));
    }

    public function edits($id)
    {
        $users= User::find($id);
        return view('user.updateuser', compact(['users']));
    }

    public function updates(Request $request)

    {
        User::where('id', $request->id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
            'role'=> $request->role,
        ]);
        return redirect('/admin/users')->  with ('update successfully');


    }


    public function delete(Request $request){
        // return('working');
        User::where('id', $request->id)->delete();
        return redirect('admin/users')->  with ("delete successfully");

    }







}
