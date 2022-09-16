<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\categories;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Offers;
use Category;

class adminController extends Controller
{
    public function admin(){
        $cat = categories::count();
        $user = User::where('user_role', '=', 'user')->get();
        $userCount = $user->count();
        $productCount = Product::count();
        $counts=[$cat,$userCount,$productCount];
        return view('admin.main')->with('counts',$counts);
    }
    public function adminUsers(){
        $users=User::all();
        return view('admin.users_admin')->with('users',$users);
    }
    public function adminAddUsers(){
        return view('admin.user');
    }
    public function adminProducts(){
        $products = Product::all();
        return view('admin.products')->with('products',$products);
    }
    public function adminCatogry(){
        $categories=categories::all();
        return view('admin.catogry')->with('categories',$categories);
    }
    public function add_User(Request $req){
            //dd($req->all());
            $req->validate([
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email'],
                'password' => 'required|min:6',
                'address' => 'required',
                'phone_number'=>'required|min:6',
            ]);
             User::create([
                'name'=>$req['name'],
                'phone'=>$req['phone_number'],
                'email'=>$req['email'],
                'user_role'=>'user',
                'address'=>$req['address'],
                'password'=>bcrypt($req['password'])
            ]);
            return redirect('/admin/users');
    }
    public function add_Category(Request $req){
        //dd($req->all());
        $req->validate([
            'name' => ['required', 'min:3'],
            'Image' => 'mimes:jpeg,bmp,png',
        ]);

        $newImageName = time().'-'. $req->name. '.' . $req->Image->extension();
        $req->Image->move(public_path('image'), $newImageName);
         categories::create([
            'name'=>$req['name'],
            'image_path'=>$newImageName,
        ]);
        return redirect('/admin/catogry');
}
    public function deleteUser($id){
        $user = User::find($id);
        $user->delete();
        return redirect('/admin/users');
    }
    public function deleteCategory($id){
        $categories = categories::find($id);
        $categories->delete();
        return redirect('/admin/catogry');
    }
    public function updateUserForm($id){
        $user = User::find($id);
        return view ('admin.userUpdate')->with('user',$user);
    }
    public function updateCatFom($id){
        $cat = categories::find($id);
        return view ('admin.catUpdate')->with('cat',$cat);
    }
      public function updateCategory(Request $req,$id){
        //dd($req->all());
        $req->validate([
            'name' => 'required',
            'Image' => 'mimes:jpeg,bmp,png',
        ]);
        $newImageName = time().'-'. $req->name. '.' . $req['Image']->extension();
        $req->Image->move(public_path('image'), $newImageName);
        categories::where('id',$id)->update([
            'name'=>$req['name'],
            'image_path'=>$newImageName,
        ]);
        return redirect('/admin/catogrye');

    }
    public function updateUser(Request $req,$id){
        //dd($req->all());
        $req->validate([
            'name' => 'required',
            'email'=>'required',
            'phone_number'=>'required',
            'address'=>'required',
            'Image' => 'mimes:jpeg,bmp,png',
        ]);
        $newImageName = time().'-'. $req->name. '.' . $req['Image']->extension();
        $req->Image->move(public_path('image'), $newImageName);
        User::where('id',$id)->update([
            'name'=>$req['name'],
            'email'=>$req['email'],
            'phone'=>$req['phone_number'],
            'address'=>$req['address'],
            'image_path'=>$newImageName,
        ]);
        return redirect('/admin/users');

    }
    public function offerForm(){
        $offers = Offers::all();
        return view('admin.offerForm')->with('offers',$offers);
    }
    public function add_Offer(Request $req){
        //dd($req->all());
        $req->validate([
            'name' => ['required', 'min:3'],
            'userName' => 'required',
            'discount' => 'required',
            'Fprice' => 'required',
            'LastPrice'=>'required',
            'description'=>'required',
            'Image'=>'required|mimes:jpeg,bmp,png'
        ]);
        $newImageName = time().'-'. $req->name. '.' . $req->Image->extension();
        $req->Image->move(public_path('image'), $newImageName);
         Offers::create([
            'ProductName'=>$req['name'],
            'userName'=>$req['userName'],
            '% of discount'=>$req['discount'],
            'FirstPrice'=>$req['Fprice'],
            'Lastprice'=>$req['LastPrice'],
            'description'=>$req['description'],
            'image_path'=>$newImageName,

        ]);
        return redirect('/admin/offers');
}
    public function deleteOffer($id){
        $offer = Offers::find($id);
        $offer->delete();
        return redirect('/admin/offers');
    }
    public function updateOfferForm($id){
        $offer = Offers::find($id);
        return view('admin.updateOffer')->with('offer',$offer);
    }
    public function updateOffer(Request $req,$id){
        //dd($req->all());
        $req->validate([
            'name' => ['required', 'min:3'],
            'userName' => 'required',
            'discount' => 'required',
            'Fprice' => 'required',
            'LastPrice'=>'required',
            'description'=>'required',
            'Image'=>'required|mimes:jpeg,bmp,png'
        ]);
        $newImageName = time().'-'. $req->name. '.' . $req['Image']->extension();
        $req->Image->move(public_path('image'), $newImageName);
        Offers::where('id',$id)->update([
            'ProductName'=>$req['name'],
            'userName'=>$req['userName'],
            '% of discount'=>$req['discount'],
            'FirstPrice'=>$req['Fprice'],
            'Lastprice'=>$req['LastPrice'],
            'description'=>$req['description'],
            'image_path'=>$newImageName,

        ]);
        return redirect('/admin/offers');
    }
    public function product($id){
        $product=Product::find($id);
        $cat=categories::all();
        return view('admin.Product_update')->with('product',$product)->with('cat',$cat);
    }
    public function update_product(Request $req,$id){
        //dd($req->all());
        $req->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category'=>'required',
            'image' => 'mimes:jpeg,bmp,png',
        ]);
        $cat = $req->get('category');
        $newImageName = time().'-'. $req->name. '.' . $req['image']->extension();
        $req->image->move(public_path('image'), $newImageName);
        Product::where('id',$id)->update([
            'name'=>$req['name'],
            'user_id'=>$id,
            'price'=>$req['price'],
            'description'=>$req['description'],
            'catg_id'=>$cat,
            'image_path'=>$newImageName,
        ]);
        return redirect('/admin/products');

    }
    public function delete_product($id){
        $offer = Product::find($id);
        $offer->delete();
        return redirect('/admin/products');
    }
    public function BannerForm(){
        $banner = Banner::all();
        return view('admin.bannerForm')->with('banner',$banner);
    }
    public function addBanner(Request $req){
        $req->validate([
            'name' => ['required', 'min:3'],
            'userPhone' => 'required',
            'LastPrice'=>'required',
            'description'=>'required',
            'Image'=>'required|mimes:jpeg,bmp,png'
        ]);
        $newImageName = time().'-'. $req->name. '.' . $req->Image->extension();
        $req->Image->move(public_path('image'), $newImageName);
         Banner::create([
            'ProductName'=>$req['name'],
            'userPhone'=>$req['userPhone'],
            'Lastprice'=>$req['LastPrice'],
            'description'=>$req['description'],
            'image_path'=>$newImageName,

        ]);
        return redirect('/admin/banner');
    }
    public function deleteBanner($id){
        $banner = Banner::find($id);
        $banner->delete();
        return redirect('/admin/banner');
    }
}
