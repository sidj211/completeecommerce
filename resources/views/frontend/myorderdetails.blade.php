@extends('layouts.master')


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

                    <!-- - - - - - - - - - - - - - Already viewed products - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3>Already Viewed Products</h3>

                        <ul class="products_list_widget">

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_4.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Adipiscing aliquet sed in lacus...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$5.99</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating alignright">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_10.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Diam eu massa quisque donec-...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><s>$29.99</s> <b>$21.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <li>

                                <a href="#" class="product_thumb">

                                    <img src="images/product_thumb_11.jpg" alt="">

                                </a>

                                <div class="wrapper">

                                    <a href="#" class="product_title">Sed in lacus ut enim adipiscing...</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>$13.99</b></p>

                                    </div>

                                </div>

                            </li>

                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->

                        </ul><!--/ .list_of_products-->

                    </section>

                    <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - My orders - - - - - - - - - - - - - - - - -->

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

                    <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->

                </aside><!--/ [col]-->

                <main class="col-md-9 col-sm-8">

                    {{----add a new column status of pending and approved----}}
                    <h1>Order id {{$orderdetails['0']['id']}} - Pending</h1>

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

                                    <td><a href="#">{{$orderdetails['0']['id']}}</a></td>

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

                                    <th>Shipment</th>

                                    <td>United Parcel Service - Worldwide Expedited</td>

                                </tr>

                                <tr>

                                    <th>Payment</th>

                                    <td>{{$orderdetails['payment_mode']}}</td>

                                </tr>

                                <tr>

                                    <th>Total</th>

                                    <td class="total">$5.99</td>

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
                                    <th class="product_sku_col">SKU</th>
                                    <th class="product_price_col">Price</th>
                                    <th class="product_qty_col">Quantity</th>
                                    <th class="product_total_col">Total</th>

                                </tr>

                                </thead>

                                <tbody>

                                <tr>

                                    <td data-title="Product Name">

                                        <a href="#" class="product_title">Adipiscing aliquet sed in lacus, Liqui-gels 24</a>

                                        <ul class="sc_product_info">

                                            <li>Size: Big</li>
                                            <li>Color: Red</li>

                                        </ul>

                                    </td>

                                    <td data-title="SKU">PS01</td>

                                    <td data-title="Price" class="subtotal">$5.99</td>

                                    <td data-title="Quantity">1</td>

                                    <td data-title="Total" class="total">$5.99</td>

                                </tr>

                                <tr>

                                    <td data-title="Product Name">

                                        <a href="#" class="product_title">Sed in lacus ut enim adipiscing dictum elementum velit<br>Relief 4.25 fl oz (126ml)</a>

                                        <ul class="sc_product_info">

                                            <li>Size: Big</li>
                                            <li>Color: Red</li>

                                        </ul>

                                    </td>

                                    <td data-title="SKU">PS02</td>

                                    <td data-title="Price" class="subtotal">$8.99</td>

                                    <td data-title="Quantity">1</td>

                                    <td data-title="Total" class="total">$8.99</td>

                                </tr>

                                <tr>

                                    <td data-title="Product Name">

                                        <a href="#" class="product_title">Donec porta diam eu massa quisque Mint 160 ea</a>

                                        <ul class="sc_product_info">

                                            <li>Size: Big</li>
                                            <li>Color: Red</li>

                                        </ul>

                                    </td>

                                    <td data-title="SKU">PS03</td>

                                    <td data-title="Price" class="subtotal">$76.99</td>

                                    <td data-title="Quantity">1</td>

                                    <td data-title="Total" class="total">$76.99</td>

                                </tr>

                                </tbody>

                                <tfoot>

                                <tr>

                                    <td colspan="4" class="bold">Subtotal</td>
                                    <td class="total">$146.87</td>

                                </tr>

                                <tr>

                                    <td colspan="4" class="bold">Shipping &amp; Heading (Flat Rate - Fixed)</td>
                                    <td class="total">$5.00</td>

                                </tr>

                                <tr>

                                    <td colspan="4" class="grandtotal">Grand Total</td>
                                    <td class="grandtotal">$151.87</td>

                                </tr>

                                </tfoot>

                            </table>

                        </div><!--/ .table_wrap -->

                        <footer class="bottom_box">

                            <a href="shop_orders_list.html" class="button_grey middle_btn">Back to My Orders</a>

                        </footer>

                    </section>

                    <!-- - - - - - - - - - - - - - End of items ordered - - - - - - - - - - - - - - - - -->

                </main><!--/ [col]-->

            </div><!--/ .row-->

        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->

    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

@endsection