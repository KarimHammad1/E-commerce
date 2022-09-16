<?php

namespace App\Http\Controllers;

use App\Models\categories;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function addProduct(Request $req){
        $cat = $req->get('category');
        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category'=>'required',
            'image' => 'mimes:jpeg,bmp,png',
        ]);
        $id=Auth::user()->id;
        $newImageName = time().'-'. $req->name. '.' . $req->image->extension();
        $req->image->move(public_path('image'), $newImageName);

         Product::create([
            'name'=>$req['name'],
            'user_id'=>$id,
            'price'=>$req['price'],
            'description'=>$req['description'],
            'catg_id'=>$cat,
            'image_path'=>$newImageName,

        ]);
        return redirect('/MyProducts');
    }
    public function viewProduct(){
        $id=Auth::user()->id;
        $products=DB::select('select * from products where user_id = ?', [$id]);
        return view('User.viewProduct')->with('products',$products);
    }
    public function singleProduct($id){
        $product=Product::find($id);
        $userID = DB::select('select user_id from products where id= ?', [$id]);
        //dd();
        $userPhone = DB::select('select phone from users where id= ?', [$userID[0]->user_id]);
        $userName = DB::select('select name from users where id= ?', [$userID[0]->user_id]);
        // dd($userName);
        return view('singleProduct')->with('product',$product)->with('userPhone',$userPhone)->with('userName',$userName);
    }

    public function single_category($id){
        $products=Product::where('catg_id','=',$id)->get();
        $category=categories::find($id);
        return view('Product')->with('products',$products)->with('category',$category);
    }
    public function deleteProduct($id){
        $prod = Product::find($id);
        $prod->delete();
        return redirect('/MyProducts');
    }
    public function UpdateForm($id){
        $product=Product::find($id);
        $cat=categories::all();
        return view('User.updateProduct')->with('product',$product)->with('cat',$cat);
    }

    public function updateProduct(Request $req,$id){
        //dd($req->all());
        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category'=>'required',
            'image' => 'mimes:jpeg,bmp,png',
        ]);
        $user=auth::user()->id;
        $cat = $req->get('category');
        $newImageName = time().'-'. $req->name. '.' . $req['image']->extension();
        $req->image->move(public_path('image'), $newImageName);
        Product::where('id',$id)->update([
            'name'=>$req['name'],
            'user_id'=>$user,
            'price'=>$req['price'],
            'description'=>$req['description'],
            'catg_id'=>$cat,
            'image_path'=>$newImageName,
        ]);
        return redirect('/MyProducts');

    }

}
