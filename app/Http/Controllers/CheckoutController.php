<?php

namespace App\Http\Controllers;

use App\Order;
use App\OrderDetail;
use Illuminate\Http\Request;
use Cart;
use App\Address;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\FooterSetting;
use App\Category;
class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $result=DB::table('footer_settings')->first();
        $information=FooterSetting::find(1)->footerInfo;
        $extra=FooterSetting::find(1)->extraInfo;
        $account=FooterSetting::find(1)->MyAccountInfo;
        $copyright=FooterSetting::find(1);
        $pro=Category::with('subcategories','products')->get();
        $cart=Cart::content();
        $user=Auth::user();
        $total=Cart::total();
        $tax=Cart::tax();
        $subtotal=Cart::subtotal();
        $count=Cart::count();
       $address=$user->address()->get();
        return view('frontend.checkout',compact('address','cart','result','information','extra','account'
        ,'copyright','pro','total','tax','subtotal','count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $total=Cart::total();
        $tax=Cart::tax();
        $cart=Cart::content();
        $count=Cart::count();
        $user=Auth::user();
        $address=$user->address()->get();
        return view('frontend.addressbook',compact('address','total','tax','count','cart'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $add=$request->all();
        $user=Auth::user();
        $user->address()->create($add);


       return redirect()->back;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function test(Request $request){
        $id=$request->id;
       $address=Address::findOrFail($id);
       $request->session()->put('add',$address);

//           common session mai dalna padega

    }

    public function payment(){
        $cart=Cart::content();
        $subtotal=Cart::subtotal();
        $total= Cart::total();
        return view('frontend.payment',compact('cart','total','subtotal'));
    }

    public function paymentinfo(Request $request){


        $payment=Session::get('add');
        $total=Cart::total();
        $payment['payment']=$request->payment;
        $payment['total']=$total;
        Session::put('add', $payment);

        $temp = Session::get('add');
      // return Cart::store('ashish');


      //return isset($mydata);


       // return  $payment['city'];

//      getting the id of current logged in user
        $user = Auth::user();



        $order = new Order();

        $order->address_id = $temp['id']; // 11
        $order->payment_mode = $temp['payment'];
        $order->total_amount = $temp['total'];
        $order->user_id = 5;

        $result=$order->save();

        $savedata = DB::table('orders')->orderBy('id','desc')->first();

        if(isset($result))
        {
            $thisis=Cart::content();
            foreach ($thisis as $order)
            {

                $orderdetails = new OrderDetail();
                $orderdetails->product_id = $order->id;
                $orderdetails->order_id = $savedata->id;
                $orderdetails->qty = $order->qty;
                $orderdetails->user_id = $user->id;
                $orderdetails->save();
                echo "sdfa";

            }



        }


       // return "done";









//        Session::push('reserveringen', array('car' => $reservation['car']));




    }


}
