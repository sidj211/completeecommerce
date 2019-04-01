@extends('layouts.master')
@include('includes.footer')

@section('content')


    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

    <div class="secondary_page_wrapper">

        <div class="container">

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

            <ul class="breadcrumbs">

                <li><a href="index.html">Home</a></li>
                <li>My Orders</li>

            </ul>

            <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

            <div class="row">

                <aside class="col-md-3 col-sm-4">

                    <!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3>My Account</h3>

                        <ul class="theme_menu">

                            <li><a href="#">Account Dashboard</a></li>
                            <li><a href="#">Account Information</a></li>
                            <li><a href="#">Address Book</a></li>
                            <li><a href="#">My Orders</a></li>
                            <li><a href="#">Billing Agreements</a></li>
                            <li><a href="#">Recurring Profiles</a></li>
                            <li><a href="#">My Product Reviews</a></li>
                            <li><a href="#">My Tags</a></li>
                            <li><a href="#">My Wishlist</a></li>
                            <li><a href="#">My Applications</a></li>
                            <li><a href="#">Newsletter Subscriptions</a></li>
                            <li><a href="#">My Downloadable Products</a></li>

                        </ul>

                    </section><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - End of information - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <a href="#" class="banner">

                            <img src="images/banner_img_10.png" alt="">

                        </a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                </aside><!--/ [col]-->

                <main class="col-md-9 col-sm-8">

                    <h1>My Orders</h1>



                    <header class="top_box on_the_sides" style="
    padding-top: 0px;
    padding-bottom: 0px;">



                        <div class="right_side">

                            {{$orders->render()}}

                        </div>

                    </header><!--/ .top_box -->

                    <div class="table_wrap">

                        <table class="table_type_1 orders_table">

                            <thead>

                            <tr>

                                <th class="order_number_col">Order Number</th>
                                <th>Order Date</th>
                                <th>Order Status</th>
                                <th class="order_total_col">Total</th>
                                <th class="product_action_col">Action</th>

                            </tr>

                            </thead>

                            <tbody>



                            @foreach($orders as $order)
                            <tr>

                                <td data-title="Order Number"><a href="">{{$order->id}}</a></td>

                                <td data-title="Order Date">{{$order->created_at}}</td>



                                @if($order->status == 0)
                                <td data-title="Order Status">Pending</td>
                                @else
                                    <td data-title="Order Status">Done</td>
                                @endif

                                <td data-title="Total" class="total">{{$order->total_amount}}</td>

                                <td data-title="Action">

                                    <ul class="buttons_col">

                                        <li>

                                            <a href="/myorders/{{$order->id}}" class="button_grey">View Order</a>

                                        </li>



                                    </ul>

                                </td>

                            </tr>
                                @endforeach

                            </tbody>

                        </table>

                    </div>


                </main><!--/ [col]-->

            </div><!--/ .row-->

        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->

    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

    <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->



@endsection