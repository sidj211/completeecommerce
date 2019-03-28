@extends('layouts.master')

@include('includes.footer')
@section('cart')
    <div class="nav_item size_3">

        <button id="open_shopping_cart" class="open_button" data-amount="{{$count}}">
            <b class="title">My Cart</b>
            <b class="total_price"> ₹{{$total}}</b>
        </button>

        <!-- - - - - - - - - - - - - - Products list - - - - - - - - - - - - - - - - -->

        <div class="shopping_cart dropdown">

             @foreach($cart as $carts)
            <div class="animated_item">

                <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                <div class="clearfix sc_product">

                    <a href="#" class="product_thumb"><img src="{{URL::to('/')}}{{$carts->options->img }}" style="width:60px;height:60px;" alt=""></a>

                    <a href="#" class="product_name">{{$carts->name}}-></a>

                    <p>{{$carts->qty}} x {{$carts->price}}</p>

                    <a href="/deleteitem/{{$carts->rowId}}"><button class="close"></button></a>

                </div><!--/ .clearfix.sc_product-->

                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

            </div><!--/ .animated_item-->
             @endforeach
            <div class="animated_item">

                <!-- - - - - - - - - - - - - - Total info - - - - - - - - - - - - - - - - -->

                <ul class="total_info">

                    <li><span class="price">Tax:</span> ₹{{$tax}}</li>

                    <li><span class="price">Discount:</span></li>

                    <li class="total"><b><span class="price">Total:</span> ₹{{$total}}</b></li>

                </ul>

                <!-- - - - - - - - - - - - - - End of total info - - - - - - - - - - - - - - - - -->

            </div><!--/ .animated_item-->

            <div class="animated_item">

                <a href="/cart" class="button_grey">View Cart</a>

                <a href="/checkout" class="button_blue">Checkout</a>

            </div><!--/ .animated_item-->

        </div><!--/ .shopping_cart.dropdown-->

        <!-- - - - - - - - - - - - - - End of products list - - - - - - - - - - - - - - - - -->

    </div><!--/ .nav_item-->
    @endsection

@section('content')

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

    <div class="secondary_page_wrapper">

        <div class="container">

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

            <ul class="breadcrumbs">

                <li><a href="index.html">Home</a></li>
                <li>Shopping Cart</li>

            </ul>

            <section class="section_offset">

                <h1>Shopping Cart</h1>

                <!-- - - - - - - - - - - - - - Shopping cart table - - - - - - - - - - - - - - - - -->

                <div class="table_wrap">

                    <table class="table_type_1 shopping_cart_table">

                        <thead>

                        <tr>
                            <th class="product_image_col">Product Image</th>
                            <th class="product_title_col">Product Name</th>
                            {{--<th>SKU</th>--}}
                            <th>Price</th>
                            <th class="product_qty_col">Quantity</th>
                            <th>Total</th>
                            <th class="product_actions_col">Action</th>
                        </tr>

                        </thead>

                        <tbody>

                        @foreach($cart as $carts)

                        <tr class="product" data-id="{{$carts->id}}" >

                            <!-- - - - - - - - - - - - - - Product Image - - - - - - - - - - - - - - - - -->

                            <td class="product_image_col" data-title="Product Image">

                                <a href="#"><img src="{{$carts->options->img}}" style="width:94px;height:70.41px;" alt=""></a>

                            </td>

                            <!-- - - - - - - - - - - - - - End of product Image - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product name - - - - - - - - - - - - - - - - -->

                            <td data-title="Product Name" data-id="{{$carts->id}}">

                                <a href="#" class="product_title">{{$carts->name}}</a>


                            </td>

                            <!-- - - - - - - - - - - - - - End of product name - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - SKU - - - - - - - - - - - - - - - - -->


                            <!-- - - - - - - - - - - - - - End of SKU - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Price - - - - - - - - - - - - - - - - -->

                            <td class="subtotal" data-title="Price">
                                {{$carts->price}}


                            </td>

                            <!-- - - - - - - - - - - - - - End of Price - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Quantity - - - - - - - - - - - - - - - - -->

                            <td data-title="Quantity">

                                <div class="qty min clearfix">

                                    <a style="height:25px;" href="/removeitem/{{$carts->rowId}}/{{$carts->qty}}">
                                        <button class="theme_button" data-direction="minus">&#45;</button>
                                    </a>

                                    <input style="height:25px;width:28px;" class="quantity" type="text" id="quantity" value="{{$carts->qty}}">

                                    <a style="height:25px;" href="/additem/{{$carts->rowId}}/{{$carts->qty}}">

                                        <button  href="/additem/{{$carts->rowId}}/{{$carts->qty}}" class="plusbutton theme_button" data-direction="plus">&#43;</button>

                                    </a>


                                </div><!--/ .qty.min.clearfix-->

                            </td>

                            <!-- - - - - - - - - - - - - - End of quantity - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Total - - - - - - - - - - - - - - - - -->

                            <td class="total" data-title="Total">

                                {{$carts->total}}

                            </td>

                            <!-- - - - - - - - - - - - - - End of total - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Action - - - - - - - - - - - - - - - - -->

                            <td data-title="Action">


                                <a href="/deleteitem/{{$carts->rowId}}" class="button_dark_grey icon_btn remove_product"><i class="icon-cancel-2"></i></a>

                            </td>

                            <!-- - - - - - - - - - - - - - End of action - - - - - - - - - - - - - - - - -->

                        </tr>


                            @endforeach



                        </tbody>

                    </table>

                </div><!--/ .table_wrap -->

                <footer class="bottom_box on_the_sides">

                    <div class="left_side">

                        <a href="/" class="button_blue middle_btn">Continue Shopping</a>

                    </div>

                    <div class="right_side">

                        <a href="/destroycart" class="button_grey middle_btn">Clear Shopping Cart</a>

                    </div>

                </footer><!--/ .bottom_box -->

                <!-- - - - - - - - - - - - - - End of shopping cart table - - - - - - - - - - - - - - - - -->

            </section><!--/ .section_offset -->

            <div class="section_offset">

                <div class="row">



                    <section class="col-sm-4">

                        <h3>Total</h3>

                        <div class="table_wrap">

                            <table class="zebra">

                                <tfoot>

                                <tr>

                                    <td>Subtotal</td>
                                    <td>{{$subtotal}}</td>

                                </tr>

                                <tr class="total">

                                    <td>Total</td>
                                    <td>{{$total}}</td>

                                </tr>

                                </tfoot>

                            </table>

                        </div>

                        <footer class="bottom_box">

                            <a class="button_blue middle_btn" href="/checkout">Proceed to Checkout</a>

                            <div class="single_link_wrap">



                            </div>

                        </footer>

                    </section><!-- / [col] -->

                </div><!--/ .row -->

            </div><!--/ .section_offset -->



        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->

    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->
    <script type="text/javascript" >

        jQuery(document).ready(function(){
            $('.plusbutton').on('click',function() {
                $.ajax({
                    url:'cart/'+id,
                    method:'GET',
                    success:function(){
                      var temp = parseInt($('.quantity').val()) ; //return value in string format so we have to convert i into integer
                      temp=temp+1;
                      $('.quantity').val(temp);

                }

                })



            });
        });
    </script>


    {{--<script type="text/javascript" >--}}

        {{--jQuery(document).ready(function(){--}}
            {{--$('.minus').on('click',function() {--}}
                {{--var id= $(this).data('id');--}}
                {{--var rowid = $(this).data('rowid');--}}
                {{--console.log(id);--}}

                {{--//we have to write an update function so as--}}
                {{--$.ajax({--}}
                    {{--url:'removeitem/'+$(this).data('rowid') +$(this).data('qty'),--}}
                    {{--method:'GET',--}}
                    {{--success:function(response)--}}
                    {{--{--}}
                        {{--console.log(response);--}}


                    {{--},--}}
                    {{--error:function (response) {--}}
                        {{--console.log(response)--}}

                    {{--}--}}

                {{--})--}}



            {{--});--}}
        {{--});--}}
    {{--</script>--}}

@endsection