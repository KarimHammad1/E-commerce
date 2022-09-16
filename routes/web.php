<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\viewController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\productController;
use App\Http\Controllers\profileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//home view
Route::get('/',[viewController::class,'home']);
//login view
Route::get('/login',[viewController::class,'loginPage']);
//about view
Route::get('/about',[viewController::class,'about']);
//contact view
Route::get('/contact',[viewController::class,'contact']);
//product view
Route::get('/product',[viewController::class,'product']);

Route::post('/signIn',[viewController::class,'doLogin']);
Route::get('/logout',[profileController::class,'Logout']);

Route::group(['middleware'=>'App\Http\Middleware\Team'],function()
{
//proifle
Route::get('/profile',[profileController::class,'profile']);
Route::get('/MyProducts',[productController::class,'viewProduct']);
//product Form
Route::get('/addProductForm',[profileController::class,'productForm']);
Route::post('/user/addProduct',[productController::class,'addProduct']);
Route::get('/deleteProduct/{id}',[productController::class,'deleteProduct']);
Route::get('/userUpdateproduct/{id}',[productController::class,'UpdateForm']);
Route::POST('/updateProd/{id}',[productController::class,'updateProduct']);

});

Route::group(['middleware'=>'App\Http\Middleware\Admin'],function()
{
//admin view
Route::get('/admin',[adminController::class,'admin']);
//admin-user view
Route::get('/admin/users',[adminController::class,'adminUsers']);
//admin add users
Route::get('/admin/addUser',[adminController::class,'adminAddUsers']);
//admin products
Route::get('/admin/products',[adminController::class,'adminProducts']);
Route::get('/update_product/{id}',[adminController::class,'product']);
Route::POST('/update_prod/{id}',[adminController::class,'update_product']);
Route::get('/delete_prod/{id}',[adminController::class,'delete_product']);
//admin category
Route::get('/admin/catogry',[adminController::class,'adminCatogry']);
Route::POST('/adduser',[adminController::class,'add_User']);
Route::POST('/addcategory',[adminController::class,'add_Category']);
//admin Delete user
Route::POST('/userDelete/{id}',[adminController::class,'deleteUser']);
//admin Delete category
Route::POST('/categoryDelete/{id}',[adminController::class,'deleteCategory']);
// admin user updateForm
Route::get('/updateForm/{id}',[adminController::class,'updateUserForm']);
// admin cat updateForm
Route::get('/catUpdate/{id}',[adminController::class,'updateCatFom']);
//admin update cat
Route::POST('/admin/catUpdate/{id}',[adminController::class,'updateCategory']);
//admin update user
Route::POST('/admin/userUpdate/{id}',[adminController::class,'updateUser']);
Route::get('/admin/offers',[adminController::class,'offerForm']);
Route::POST('/addOffer',[adminController::class,'add_Offer']);
Route::POST('/offerDelete/{id}',[adminController::class,'deleteOffer']);

Route::get('/offerUpdate/{id}',[adminController::class,'updateOfferForm']);
Route::POST('/admin/updateOffer/{id}',[adminController::class,'updateOffer']);
Route::get('/admin/banner',[adminController::class,'BannerForm']);
Route::POST('/addBanner',[adminController::class,'addBanner']);

Route::POST('/bannerDelete/{id}',[adminController::class,'deleteBanner']);
});
Route::get('/product/{id}',[productController::class,'singleProduct']);
Route::get('/catprod',[viewController::class,'catProd']);

Route::get('/cat/{id}',[productController::class,'single_category']);
Route::get('/team',[viewController::class,'team']);
Route::get('/teamProduct/{id}',[viewController::class,'teamProduct']);

Route::get('/teamOneProduct/{id}',[viewController::class,'teamOneProduct']);
