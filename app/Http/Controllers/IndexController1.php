<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Category;
use App\FooterSetting;
use App\Product;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Cart;

class IndexController1 extends Controller
{
    //
    public function index()
    {

        $result=DB::table('footer_settings')->first();
        $information=FooterSetting::find(1)->footerInfo;
        $extra=FooterSetting::find(1)->extraInfo;
        $account=FooterSetting::find(1)->MyAccountInfo;
        $copyright=FooterSetting::find(1);
        $pro=Category::with('subcategories','products')->get();

        $categories = Category::pluck('name','id');

        $banners = Banner::all();

        $products = Product::all();
        $total=Cart::total();
        $tax=Cart::tax();
        $cart=Cart::content();
        $count=Cart::count();

        return view('frontend.index',compact('result','extra','products','information','account',
            'copyright','pro','banners','total','tax','cart','count' ));


    }

//    this function will return categories related products
//    public function showcategoriesrelatedproduct($id)
//    {
//        $pro=Category::with('subcategories','products')->get();
//        $category=Category::findOrFail($id);
//        $categoryrelatedproducts = Category::with('products')->where('id','=',$id)->paginate(1);
//        $test = Category::findOrFail($id)->products()->count();
//        $cart=Cart::content();
//        $total=Cart::total();
//        $tax=Cart::tax();
//        $count=Cart::count();
//        return view('frontend.categories',compact('categoryrelatedproducts','category','pro','test',
//            'cart','total','tax','count'));
//    }


    public function showcategoriesrelatedproduct($id)
    {
        $pro=Category::with('subcategories','products')->get();
        $category=Category::findOrFail($id);
        /* $categoryrelatedproducts = Category::with('products')->where('id','=',$id)->paginate(1);*/

        $categoryrelatedproducts = Category::find($id)->products()->paginate(3);


        $result=DB::table('footer_settings')->first();
        $information=FooterSetting::find(1)->footerInfo;
        $extra=FooterSetting::find(1)->extraInfo;
        $account=FooterSetting::find(1)->MyAccountInfo;
        $copyright=FooterSetting::find(1);
        $test = Category::findOrFail($id)->products()->count();
        $cart=Cart::content();
        $total=Cart::total();
        $tax=Cart::tax();
        $count=Cart::count();
        return view('frontend.categories',compact('categoryrelatedproducts','category','pro','test',
            'cart','total','tax','count','result','information','extra','account','copyright'));
    }


    public function showsubcategoriesrelatedproduct($id)
    {
       $subcategoriesrelatedproducts = Subcategory::with('subproducts')->where('id','=',$id)->get();



        return view('frontend.subcategories',compact('subcategoriesrelatedproducts'));



    }




    //this function will give particular product details
    public function productdetails($id)
    {
        $result=DB::table('footer_settings')->first();
        $information=FooterSetting::find(1)->footerInfo;
        $extra=FooterSetting::find(1)->extraInfo;
        $account=FooterSetting::find(1)->MyAccountInfo;
        $copyright=FooterSetting::find(1);
        $categoryrelatedproducts = Category::find($id)->products;
        $cart=Cart::content();
        $total=Cart::total();
        $tax=Cart::tax();
        $count=Cart::count();
        $pro=Category::with('subcategories','products')->get();
        $productdetails = Product::findOrFail($id);
         return view('frontend.productdetails',compact('productdetails','pro','cart','total',
             'count','tax','result','information','extra','account','copyright','categoryrelatedproducts'));
    }

    public function cartdetails()
    {
        return view('frontend.cart');

    }

    public function store(Request $request)
    {

    }

    public function todaydeals()
    {
        //return the today deals page
        $result=DB::table('footer_settings')->first();
        $information=FooterSetting::find(1)->footerInfo;
        $extra=FooterSetting::find(1)->extraInfo;
        $account=FooterSetting::find(1)->MyAccountInfo;
        $copyright=FooterSetting::find(1);
        $pro=Category::with('subcategories','products')->get();
        $cart=Cart::content();
        $total=Cart::total();
        $tax=Cart::tax();
        $count=Cart::count();
        $todaydeals = Product::where('today_deal','=',1)->paginate(3);
        $featuredproducts = Product::where('featured','=',1)->get();
        return view('frontend.todaydeals',compact('todaydeals','count','tax',
            'total','cart','pro','featuredproducts','result','information','extra','account','copyright'));
    }

    public function featuredproducts()
    {
        $result=DB::table('footer_settings')->first();
        $information=FooterSetting::find(1)->footerInfo;
        $extra=FooterSetting::find(1)->extraInfo;
        $account=FooterSetting::find(1)->MyAccountInfo;
        $copyright=FooterSetting::find(1);
        $pro=Category::with('subcategories','products')->get();
        $cart=Cart::content();
        $total=Cart::total();
        $tax=Cart::tax();
        $count=Cart::count();
        $todaydeals = Product::where('today_deal','=',1)->get();
        $featuredproducts = Product::where('featured','=',1)->paginate(3);
        return view('frontend.featuredproduct',compact('featuredproducts','todaydeals','tax',
            'total','cart','count','pro','result','information','extra','account','copyright'));
    }



    public function myaccount()
    {
        return view('frontend.myaccount');
    }



}
