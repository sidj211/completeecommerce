<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\FooterSetting;
use App\Category;
use Cart;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    /**
     * Display a listing cof the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD

=======
>>>>>>> e52d1fe1e7bf053f4dea393b5f948f50be4531b2
        $result=DB::table('footer_settings')->first();
        $information=FooterSetting::find(1)->footerInfo;
        $extra=FooterSetting::find(1)->extraInfo;
        $account=FooterSetting::find(1)->MyAccountInfo;
        $copyright=FooterSetting::find(1);
        $pro=Category::with('subcategories','products')->get();
<<<<<<< HEAD
=======
        $orders = Auth::user()->orders()->paginate(3);
        $cart=Cart::content();
>>>>>>> e52d1fe1e7bf053f4dea393b5f948f50be4531b2
        $total=Cart::total();
        $tax=Cart::tax();
        $count=Cart::count();
<<<<<<< HEAD
        $orders=Auth::user()->orders()->paginate(3);
        return view('frontend.myorders',compact('orders','result','information','extra','account',
            'copyright','pro','total','tax','cart','count'));


=======
        return view('frontend.myorders',compact('orders','information','result'
        ,'extra','account','copyright','pro','cart','tax','total','count'));
>>>>>>> e52d1fe1e7bf053f4dea393b5f948f50be4531b2
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //this will show the order in details
        $orderdetails = OrderDetail::where('order_id','=',$id)->get();

        foreach ($orderdetails as $orderdetail)
        {
             $products =  Product::findOrFail($orderdetail->product_id);
            $orderdetail['product_id'] = $products->P_name;
            $orderdetail['amount'] = $products->P_total_retail_price;
        }



     $data = Order::findOrFail($id);


      return view('frontend.myorderdetails',compact('orderdetails','data'));

     //  return $data;




        //here we have to send all the items related to the order ID






    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
