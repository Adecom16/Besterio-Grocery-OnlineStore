<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EditController extends Controller
{
    use AuthorizesRequests, ValidatesRequests;
      // user dash
      function indexs(){
        $users= User::all();
        return  view('home', compact(['users']));
    }

      public function editdash($id)
      {
          $users= User::find($id);
          return view('auth.edit', compact(['users']));
      }

      public function updatedash(Request $request)

      {
          User::where('id', $request->id)->update([
              'name'=> $request->name,
              'email'=> $request->email,
              'password'=> $request->password,
              'role'=> $request->role,
          ]);
          return redirect('/home')->  with ('update successfully');


      }
}
