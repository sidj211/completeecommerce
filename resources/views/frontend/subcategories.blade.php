@extends('layouts.master')

@section('content')


    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

    <div class="secondary_page_wrapper">

        <div class="container">

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

            <ul class="breadcrumbs">



            </ul>

            <!-- - - - - - - - - - - - - - Related products - - - - - - - - - - - - - - - - -->

            <section class="section_offset">

                <h3 class="offset_title">Featured Products</h3>

                <!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

                <div class="owl_carousel five_items">



                @foreach($subcategoriesrelatedproducts  as $produ)
                    @foreach($produ->subproducts as $product)
                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}{{$product->photo->file}}" alt="">

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                <div class="label_new">New</div>

                                <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="{{route('product.details',$product->id)}}">{{$product->P_name}}</a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>₹{{$product->P_total_retail_price}}</b></p>

                                    </div>

                                </div>

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                            <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->
                        @endforeach
                    @endforeach


                </div><!--/ .owl_carousel.five_items-->

                <!-- - - - - - - - - - - - - - End of featured products - - - - - - - - - - - - - - - - -->

            </section><!--/ .section_offset-->

            <!-- - - - - - - - - - - - - - End of related products - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Category description - - - - - - - - - - - - - - - - -->



            <!-- - - - - - - - - - - - - - End of category description - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Filter - - - - - - - - - - - - - - - - -->



            <!-- - - - - - - - - - - - - - End of filter - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Products - - - - - - - - - - - - - - - - -->

            <div class="section_offset">

                <header class="top_box on_the_sides">

                    <div class="left_side clearfix v_centered">

                        <!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->

                        <div class="v_centered">

                            <span>Sort by:</span>

                            <div class="custom_select sort_select">

                                <select name="">

                                    <option value="Default">Default</option>
                                    <option value="Price">Price</option>
                                    <option value="Name">Name</option>
                                    <option value="Date">Date</option>

                                </select>

                            </div>

                        </div>

                        <!-- - - - - - - - - - - - - - End of sort by - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - Number of products shown - - - - - - - - - - - - - - - - -->

                        <div class="v_centered">

                            <span>Show:</span>

                            <div class="custom_select">

                                <select name="">

                                    <option value="15">15</option>
                                    <option value="12">12</option>
                                    <option value="9">9</option>
                                    <option value="6">6</option>
                                    <option value="3">3</option>

                                </select>

                            </div>

                        </div>

                        <!-- - - - - - - - - - - - - - End of number of products shown - - - - - - - - - - - - - - - - -->

                    </div>

                    <div class="right_side">

                        <!-- - - - - - - - - - - - - - Product layout type - - - - - - - - - - - - - - - - -->

                        <div class="layout_type buttons_row" data-table-container="#products_container">


                        </div>

                        <!-- - - - - - - - - - - - - - End of product layout type - - - - - - - - - - - - - - - - -->

                    </div>

                </header>

                <div class="table_layout" id="products_container">

                    <div class="table_row">

                        @foreach( $subcategoriesrelatedproducts as $pro1)
                       @foreach($pro1->subproducts as $subpro)
                        <div class="table_cell col-sm-4">


                            <div class="product_item">

                                <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                <div class="image_wrap">

                                    <img src="{{URL::to('/')}}{{$subpro->photo->file}}" alt="" style="width: 120px; height:120px";>

                                    <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                    <div class="actions_wrap">

                                        <div class="centered_buttons">

                                            <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                            <a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a>

                                        </div><!--/ .centered_buttons -->

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                        <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                    </div><!--/ .actions_wrap-->

                                    <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                </div><!--/. image_wrap-->

                                <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                <div class="description">

                                    <a href="#"></a>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>{{$subpro->P_name}}</b></p>

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->



                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                    </div>

                                    <div class="clearfix product_info">

                                        <p class="product_price alignleft"><b>₹{{$subpro->P_total_retail_price}}</b></p>

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

                                <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Full description (only for list view) - - - - - - - - - - - - - - - - -->

                                <div class="full_description">

                                    <a href="#" class="product_title">Lorem interdum vitae dapibus ac, Liqui-gels 24 capsules</a>

                                    <a href="#" class="product_category">Beauty Clearance</a>

                                    <div class="v_centered product_reviews">

                                        <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                        <ul class="rating">

                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li class="active"></li>
                                            <li></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Reviews menu - - - - - - - - - - - - - - - - -->

                                        <ul class="topbar">

                                            <li><a href="#">3 Review(s)</a></li>
                                            <li><a href="#">Add Your Review</a></li>

                                        </ul>

                                        <!-- - - - - - - - - - - - - - End of reviews menu - - - - - - - - - - - - - - - - -->

                                    </div>

                                    <p>Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula.</p>

                                    <a href="#" class="learn_more">Learn More</a>

                                </div>

                                <!-- - - - - - - - - - - - - - End of full description (only for list view) - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

                                <div class="actions">

                                    <p class="product_price bold">$5.99</p>

                                    <ul class="seller_stats">

                                        <li>Shipping: <span class="success">Free Shipping</span></li>
                                        <li>Availability: <span class="success">in stock</span></li>
                                        <li class="seller_info_wrap">

                                            Seller: <span class="seller_name">johnsmith</span>

                                            <div class="seller_info_dropdown">

                                                <ul class="seller_stats">

                                                    <li>

                                                        <ul class="topbar">

                                                            <li>China (Mainland)</li>

                                                            <li><a href="#">Contact Details</a></li>

                                                        </ul>

                                                    </li>

                                                    <li><span class="bold">99.8%</span> Positive Feedback</li>

                                                </ul>

                                                <div class="v_centered">

                                                    <a href="#" class="button_blue mini_btn">Contact Seller</a>

                                                    <a href="#" class="small_link">Chat Now</a>

                                                </div>

                                            </div>

                                        </li>

                                    </ul>

                                    <ul class="buttons_col">

                                        <li><a href="#" class="button_blue middle_btn add_to_cart">Add to Cart</a></li>

                                        <li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

                                        <li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

                                    </ul>

                                </div>

                                <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

                            </div><!--/ .product_item-->

                        </div>
                        @endforeach
                            @endforeach



                    </div><!--/ .table_row -->


                </div><!--/ .table_layout -->

                <footer class="bottom_box on_the_sides">

                    <div class="left_side">

                        <p>Showing 1 to 3 of 45 (15 Pages)</p>

                    </div>

                    <div class="right_side">

                        <ul class="pags">

                            <li><a href="#"></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"></a></li>

                        </ul>

                    </div>

                </footer>

            </div>

            <!-- - - - - - - - - - - - - - End of products - - - - - - - - - - - - - - - - -->

        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->

    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->




@endsection