<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\ProductImg;
use App\RetailTax;
use App\Tax;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::pluck('name','id');
        $taxes = Tax::pluck('value','id');
        $retailtaxes = RetailTax::pluck('value','id');
        $products = Product::where('id','>',0)->paginate(5);

        return view('frontend.products.index',compact('categories','taxes','retailtaxes','products'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('name','id');
        return view('frontend.createproduct',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //brings product related data
        $input = $request->all();

        // this will give the current user
        $user = Auth::user();

       if ($file=$request->file('photo_id'))
        {
            //file ka name generate karenge then
            // munipulating the file name
            $name = time().$file->getClientOriginalName();

            // then file ko move karenge directory ke andar
            $file->move('images',$name);

            // photo model se uska object banaya then usme photo id dali
            //productimag table has file columne
            // photo name iski helo se doosri table mai chala gya
            $photo = ProductImg::create(['file'=>$name]);

            // then with the help of object we will get the id of current image

            //input variable se photo_id column mai name ko replace karkek id daal denge
            $input['photo_id'] = $photo->id;
        }

        //products() is the name of the relationship between user and products
         $temp=$user->products()->create($input);

        return redirect('/products');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('frontend.products.show',compact('product'));
    }
    public function test()
    {
        //
        return view('frontend.products.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $products = Product::findOrFail($id);
        $categories = Category::pluck('name','id');
        $taxes = Tax::pluck('value','id');
        $retailtaxes = RetailTax::pluck('value','id');
        return view('frontend.products.edit',compact('categories','taxes','products','retailtaxes'));

       /* $categories = Category::pluck('name','id');
        $taxes = Tax::pluck('value','id');
        $retailtaxes = RetailTax::pluck('value','id');
        $products = Product::all();
        return view('frontend.products.index',compact('categories','taxes','retailtaxes','products'));*/

       /* $categories = Category::pluck('name','id');
        $taxes = Tax::pluck('value','id');
        $retailtaxes = RetailTax::pluck('value','id');
        return view('frontend.products.create',compact('categories','taxes','retailtaxes'));*/


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

        $input = $request->all();

        if($file = $request->file('photo_id'))
        {
            $name = time().$file->getClientOriginalName();
            $file->move('images',$name);

            $photo = Photo::create(['file'=>$name]);
            $input['photo_id'] = $photo->id;
        }

        Auth::user()->products->where('id','=',$id)->first()->update($input);
        return redirect('/products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return response()->json([
            'success' => 'Record has been deleted successfully!'
        ]);

    }



}
