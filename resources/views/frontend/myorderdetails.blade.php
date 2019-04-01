@extends('layouts.master')


@section('content')


    <div class="secondary_page_wrapper">

        <div class="container">


            <ul class="breadcrumbs">

                <li><a href="index.html">Home</a></li>
                <li>My Orders</li>

            </ul>

            <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

            <div class="row">

                <aside class="col-md-3 col-sm-4">

                  @include('includes.accountsidebar')
                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <a href="#" class="banner">

                            <img src="images/banner_img_10.png" alt="">

                        </a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->


                    <!-- - - - - - - - - - - - - - My orders - - - - - - - - - - - - - - - - -->
{{--

                    <section class="section_offset">

                        <h3>My Orders</h3>

                        <ul class="products_list_widget">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_7.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Sed ut perspiciatis unde omnis...</a>

                                    <div class="clearfix product_info">

                                        <input type="checkbox" name="" id="product_1">
                                        <label for="product_1" class="reorder_checkbox">Reorder</label>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_8.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Suspendisse sollicitudin velit sed...</a>

                                    <input type="checkbox" name="" id="product_2">
                                    <label for="product_2" class="reorder_checkbox">Reorder</label>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </ul><!--/ .list_of_products-->

                        <footer class="bottom_box">

                            <div class="buttons_row">

                                <a href="#" class="button_blue middle_btn">Add to Cart</a>

                                <a href="#" class="button_grey middle_btn">View All</a>

                            </div>

                        </footer>

                    </section>
--}}

                    <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->

                </aside><!--/ [col]-->



                <main class="col-md-9 col-sm-8">

                    {{----add a new column status of pending and approved----}}
                    <h1>Order id {{$orderdetails['0']['order_id']}} - Pending</h1>

                    <!-- - - - - - - - - - - - - - Order table - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <header class="top_box">

                            <div class="buttons_row">


                                <a href="#" class="button_grey middle_btn">Print Order</a>

                            </div>

                        </header>

                        <div class="table_wrap">

                            <table class="table_type_1 order_table">

                                <tbody>

                                <tr>

                                    <th>Order Number</th>

                                    <td><a href="#">{{$orderdetails['0']['order_id']}}</a></td>

                                </tr>

                                <tr>

                                    <th>Order Date</th>

                                    <td>{{$orderdetails['0']['created_at']->diffForHumans()}}</td>

                                </tr>

                                <tr>

                                    <th>Product Status</th>

                                    <td>To be Done</td>

                                </tr>

                                <tr>

                                    <th>Last Updated</th>

                                    <td>{{$orderdetails['0']['updated_at']->diffForHumans()}}</td>

                                </tr>



                                <tr>

                                    <th>Payment</th>

                                    <td>{{$data->payment_mode}}</td>

                                </tr>

                                <tr>

                                    <th>Total</th>

                                    <td class="total"></td>

                                </tr>

                                </tbody>

                            </table>

                        </div>

                    </div><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of order table - - - - - - - - - - - - - - - - -->



                    <!-- - - - - - - - - - - - - - Items ordered - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3>Items Ordered</h3>

                        <div class="table_wrap">

                            <table class="table_type_1 order_review">

                                <thead>

                                <tr>

                                    <th class="product_title_col">Product Name</th>

                                    <th class="product_price_col">Price</th>
                                    <th class="product_qty_col">Quantity</th>
                                    <th class="product_total_col">Total</th>

                                </tr>

                                </thead>

                                <tbody>

                                @foreach($orderdetails as $orderdetail)



                                <tr>

                                    <td data-title="Product Name">

                                        <a href="#" class="product_title">{{$orderdetail->product_id}}</a>



                                    </td>


                                    <td data-title="Price" class="subtotal">{{$orderdetail->amount}}</td>

                                    <td data-title="Quantity">{{$orderdetail->qty}}</td>

                                    <td data-title="Total" class="total">{{($orderdetail->amount)*($orderdetail->qty) }}</td>

                                </tr>

                                    @endforeach




                                </tbody>

                                <tfoot>

                                {{--section for shipping charges and subtotal--}}

                                {{--<tr>

                                    <td colspan="4" class="bold">Subtotal</td>
                                    <td class="total">$146.87</td>

                                </tr>

                                <tr>

                                    <td colspan="4" class="bold">Shipping &amp; Heading (Flat Rate - Fixed)</td>
                                    <td class="total">$5.00</td>

                                </tr>--}}

                                <tr>

                                    <td colspan="4" class="grandtotal">Grand Total : {{$data->total_amount}}</td>
                                    <td class="grandtotal"></td>

                                </tr>

                                </tfoot>

                            </table>

                        </div><!--/ .table_wrap -->

                        <footer class="bottom_box">

                            <a href="shop_orders_list.html" class="button_grey middle_btn">Back to My Orders</a>

                        </footer>

                    </section>


                </main><!--/ [col]-->

            </div><!--/ .row-->

        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->

    <div>

        hellogit
    </div>


@endsection