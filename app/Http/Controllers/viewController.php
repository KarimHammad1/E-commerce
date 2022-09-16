<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Offers;

class viewController extends Controller
{
    public function home(){
        $offers = Offers::all();
        $banner = Banner::all();
        return view('home')->with('offers',$offers)->with('banner',$banner);
    }
    public function loginPage(){
        return view('Login');
    }
    public function contact(){
        return view('Contact');
    }
    public function about(){
        return view('About');
    }
    public function product(){
        $offer= Offers::all();
        $products = Product::all();
        $catg = categories::all();
        return view('Product',[
            'product'=>Product::latest()->filter(request(['search']))->paginate(6)
        ])->with('products',$products)->with('catg',$catg)->with('offer',$offer);
    }
      public function doLogin(Request $request)
    {
        if (Auth::attempt(['email'=>$request['email'],'password'=>$request['password']]))
          {
            if(Auth::user()->user_role=="admin")
            {return redirect('/admin');}
            else{
                return redirect('/');
            }

          }
          else{
            return redirect('/login');
        }

    }
    public function catProd(){
        $products = Product::all();
        $catg = categories::all();
        return view('cat_prod')->with('products',$products)->with('catg',$catg);
    }
    public function team(){
        $id = "user";
        $team = DB::select('select * from users where user_role= ?', [$id]);
        return view ('Team')->with('team',$team);
    }
    public function teamProduct($id){
        $userName = DB::select('select name from users where id= ?', [$id]);
        $userPhone = DB::select('select phone from users where id= ?', [$id]);
        $team = DB::select('select * from products where user_id= ?', [$id]);
        return view ('TeamProduct')->with('team',$team)->with('userName',$userName)->with('userPhone',$userPhone);
    }
    public function teamOneProduct($id){
    $product = DB::select('select * from products where user_id= ?', [$id]);
    return view('TeamOneProduct')->with('product',$product);
    }
}
