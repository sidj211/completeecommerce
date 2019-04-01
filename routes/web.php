<?php

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

use App\Category;
use App\Product;
use App\RetailTax;
use App\Subcategory;
use App\Tax;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'IndexController1@index');


Route::get('/adminpanel',function(){

    return view('backend.adminpanel');
});

//cart routes

Route::get('/destroycart',function(){
    Cart::destroy();
    return redirect('/cart');
});

Route::resource('/checkout','CheckoutController');
Route::post('/next','CheckoutController@test');
Route::post('/paymentinfo','CheckoutController@paymentinfo');

Route::get('/d',function (){

    return Cart::restore('ashish');
});
Route::get('/getsession',function (){

   return session()->get('add');
});

Route::resource('/cart','CartController');
Route::get('/removeitem/{id}/{qty}','CartController@removeitem');
Route::get('/additem/{id}/{qty}','CartController@additem');
Route::get('/deleteitem/{id}','CartController@deleteitem');

//payment

Route::get('/featuredproduct','IndexController1@featuredproducts');

Route::get('/todaydeals','IndexController1@todaydeals');

Route::get('/payment','CheckoutController@payment');



Route::resource('/products','ProductController');

Route::get('/tempo',function (){

    $categories = Category::pluck('name','id');
    $taxes = Tax::pluck('value','id');
    $retailtaxes = RetailTax::pluck('value','id');
    return view('frontend.products.create',compact('categories','taxes','retailtaxes'));

});

Route::get('/oducts/{id}/editto',function ($id){

    $products = Product::find($id);

    $categories = Category::pluck('name','id');
    $taxes = Tax::pluck('value','id');
    $retailtaxes = RetailTax::pluck('value','id');

    return view('frontend.products.edit',compact('products','categories','taxes','retailtaxes'));

});

Route::resource('/footer','SetFooterController');

Route::resource('/category','CategoryController');

Route::resource('/subcategory','SubCategoryController');

Route::resource('/categories','CategoriesController');
Route::resource('/Subcategories','SubcategoriesController');
Route::resource('/tax','TaxController');
Route::resource('/retailtax','RetailTaxController');
Route::resource('/brand','BrandController');
Route::resource('/banner','BannerController');



Route::get('/MobileMafia','IndexController1@index');
Route::get('/crproducts/{id}','IndexController1@showcategoriesrelatedproduct')->name('category.related.product');
Route::get('/subcrproducts/{id}','IndexController1@showsubcategoriesrelatedproduct')->name('subcategory.related.product');
Route::get('/productdetail/{id}','IndexController1@productdetails')->name('product.details');
Route::get('/shoppingcart','IndexController1@cartdetails')->name('cart.details');



Route::get('/test',function(){
    $subcat= Category::with('subcategories','products')->get()->toArray();
    print_r($subcat);
});

Route::get('/category/getproducts/{categoryid}','CategoriesController@getproducts');
Route::get('/subcategory/getsubcategories/{subcategory}','SubCategoryController@getsubcategories');
Route::get('/subcategories/getsubcategories/{subcategory}','SubCategoriesController@getsubcategories');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/showing',function(){

    return view('frontend.products.show');
});

Route::get('/check',function(){

    $categoryrelatedproducts = Category::with('products')->where('id','=',1)->get()->toArray();
    print_r($categoryrelatedproducts);

});

Route::get('/check2',function(){

    $subcategoriesrelatedproducts = Subcategory::with('subproducts')->where('id','=',1)->get()->toArray();
    print_r($subcategoriesrelatedproducts);

});

//Route for orders
Route::resource('/myorders','OrderController');
//Route for my account
Route::get('/myaccount',function (){

    return view('frontend.myaccount');
});

