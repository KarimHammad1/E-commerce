<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function profile(){
        $id=Auth::user()->id;
        $user = User::find($id);
        return view('User.mainProfile')->with('user',$user);
    }
    public function productForm(){
        $cat = categories::all();
        return view('User.AddProduct')->with('cat',$cat);
    }
    public function Logout(Request $req)
    {
        Auth::logout();
        return redirect('/');
    }

}
