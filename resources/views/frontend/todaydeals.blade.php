@extends('layouts.master')

@include('includes.footer')

@section('categoryname')

    <ul class="theme_menu submenu">
        @foreach($pro as $categories)
            <li class="has_submenu ">

                <a href="{{route('category.related.product',$categories->id)}}">{{$categories->name}}</a>

                <!-- - - - - - - - - - - - - - Submenu (level 3) - - - - - - - - - - - - - - - - -->

                <ul class="theme_menu submenu">
                    @foreach($categories->subcategories as $bcategories)
                        <li class=""><a href="{{route('subcategory.related.product',$bcategories->id)}}">{{$bcategories->name}}</a></li>
                    @endforeach
                </ul>

                <!-- - - - - - - - - - - - - - End submenu (level 3) - - - - - - - - - - - - - - - - -->

            </li>
        @endforeach

    </ul>

@endsection


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

@section('category')
    @foreach($pro as $categories)
        <li class="animated_item"><a href="#">{{$categories->name}}</a></li>
    @endforeach
@endsection


@section('categorydropdown')

    @foreach($pro as $categories)
        <li class="has_megamenu animated_item">

            <a href="{{route('category.related.product',$categories->id)}}">{{$categories->name}}</a>

            <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

            <div class="mega_menu clearfix">

                <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                <div class="mega_menu_item">

                    <ul class="list_of_links">

                        @foreach($categories->subcategories as $bcategories)
                            <li><a href="{{route('subcategory.related.product',$bcategories->id)}}">{{$bcategories->name}}</a></li>
                        @endforeach


                    </ul>

                </div><!--/ .mega_menu_item-->

                <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->


                <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

            </div><!--/ .mega_menu-->

            <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

        </li>
    @endforeach

@endsection


@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

    <div class="secondary_page_wrapper">

        <div class="container">

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

            <ul class="breadcrumbs">



            </ul>

            <div class="row" >


                <aside class="col-md-3 col-lg-3 has_mega_menu">

                    <section class="section_offset">

                        <h3 class="widget_title">Today's Deals</h3>

                        <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel widgets_carousel">

                            @foreach($featuredproducts as $featuredproduct)



                                    <div class="product_item">

                                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                        <div class="image_wrap">

                                            <img src="{{$featuredproduct->photo->file}}" alt="">

                                            <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                            <div class="actions_wrap">

                                                <div class="centered_buttons">

                                                    <button><a href="#" class="button_dark_grey middle_btn quick_view" data-toggle="modal" data-target="#quickview" data-modal-url="proassets/modals/quick_view.html">Quick View</a></button>

                                                    <a href="#" class="addtocart button_blue middle_btn add_to_cart name=addtocart" data-id="{{$featuredproduct->id}}">Add to Cart</a>
                                                    <div class="modal fade" id="quickview" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Modal Header</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>

                                                </div><!--/ .centered_buttons -->

                                                <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                <a href="#" class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                            </div><!--/ .actions_wrap-->

                                            <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->



                                        </div><!--/. image_wrap-->

                                        <!-- - - - - - - - - - - - - - End thumbnail - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                        <div class="label_offer percentage">

                                            <div>{{$featuredproduct->P_discount_id}}%</div>OFF

                                        </div>

                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                        <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                        <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                        <div class="description">

                                            <p><a href="#">{{$featuredproduct->P_specification}}</a></p>

                                            <div class="clearfix product_info">

                                                <!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->

                                                <ul class="rating alignright">

                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li class="active"></li>
                                                    <li></li>

                                                </ul>

                                                <!-- - - - - - - - - - - - - - End product rating - - - - - - - - - - - - - - - - -->

                                                <p class="product_price alignleft"><s>{{$featuredproduct->P_mrp}}</s> <b>{{$featuredproduct->P_total_retail_price}}</b></p>

                                            </div><!--/ .clearfix.product_info-->

                                        </div>

                                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .product_item-->



                        @endforeach
                        <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->



                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->


                        </div>

                        <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <!-- - - - - - - - - - - - - - View all deals of the day - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Deals</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all deals of the day - - - - - - - - - - - - - - - - -->

                    </section>

                    <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3>Categories</h3>

                        <ul class="theme_menu cats">


                            @foreach($pro as $categories)
                                <li class="has_megamenu">

                                    <a href="{{route('category.related.product',$categories->id)}}">{{$categories->name}}</a>

                                    <!-- - - - - - - - - - - - - - Mega menu - - - - - - - - - - - - - - - - -->

                                    <div class="mega_menu clearfix">

                                        <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->

                                        <div class="mega_menu_item">

                                            <ul class="list_of_links">

                                                @foreach($categories->subcategories as $bcategories)
                                                    <li><a href="{{route('subcategory.related.product',$bcategories->id)}}">{{$bcategories->name}}</a></li>
                                                @endforeach
                                            </ul>

                                        </div><!--/ .mega_menu_item-->

                                        <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Mega menu item - - - - - - - - - - - - - - - - -->



                                        <!-- - - - - - - - - - - - - - End of mega menu item - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .mega_menu-->

                                    <!-- - - - - - - - - - - - - - End of mega menu - - - - - - - - - - - - - - - - -->

                                </li>

                            @endforeach




                        </ul>

                    </section>

                    <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Filter - - - - - - - - - - - - - - - - -->



                    <!-- - - - - - - - - - - - - - End of filter - - - - - - - - - - - - - - - - -->

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

                                    <a href="#" class="product_title">Aenean auctor wisi et urna...</a>

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

                        </ul><!--/ .list_of_products-->

                    </section>

                    <!-- - - - - - - - - - - - - - End of already viewed products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Compare products - - - - - - - - - - - - - - - - -->



                    <!-- - - - - - - - - - - - - - End of compare products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Tags - - - - - - - - - - - - - - - - -->



                    <!-- - - - - - - - - - - - - - End of tags - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <a href="#" class="banner">

                            <img src="images/banner_img_11.png" alt="">

                        </a>

                    </div>

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                </aside>

                <!-- - - - - - - - - - - - - - Products - - - - - - - - - - - - - - - - -->

                <div class="section_offset col-lg-9">

                    <header class="top_box on_the_sides">

                        <div class="left_side clearfix v_centered">

                            <!-- - - - - - - - - - - - - - Sort by - - - - - - - - - - - - - - - - -->

                            <div class="v_centered">

                                <span>Sort by:</span>

                                <div class="custom_select sort_select"><div class="active_option open_select">Default</div><ul class="options_list dropdown"><li class="animated_item" style="transition-delay:0.1s"><a href="#">Default</a></li><li class="animated_item" style="transition-delay:0.2s"><a href="#">Price</a></li><li class="animated_item" style="transition-delay:0.3s"><a href="#">Name</a></li><li class="animated_item" style="transition-delay:0.4s"><a href="#">Date</a></li></ul>

                                    <select name="" style="display: none;">

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

                                <div class="custom_select"><div class="active_option open_select">12</div><ul class="options_list dropdown"><li class="animated_item" style="transition-delay:0.1s"><a href="#">15</a></li><li class="animated_item" style="transition-delay:0.2s"><a href="#">12</a></li><li class="animated_item" style="transition-delay:0.3s"><a href="#">9</a></li><li class="animated_item" style="transition-delay:0.4s"><a href="#">6</a></li><li class="animated_item" style="transition-delay:0.5s"><a href="#">3</a></li></ul>

                                    <select name="" style="display: none;">

                                        <option value="15">15</option>
                                        <option selected="" value="12">12</option>
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


                            <!-- - - - - - - - - - - - - - End of product layout type - - - - - - - - - - - - - - - - -->

                        </div>

                    </header>

                    <div class="table_layout grid_view" id="products_container">

                        <div class="table_row">

                        @foreach($todaydeals as $todaydeal)

                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                <div class="table_cell col-lg-4 col-sm-4 ">

                                    <div class="product_item">

                                        <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                        <div class="image_wrap">

                                            <img src="{{URL::to('/')}}{{$todaydeal->photo->file}}" style="height: 150px;width: 200px;" alt="">

                                            <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->
                                            <div data-brackets-id="3195" class="label_new">New</div>
                                            <div class="actions_wrap">

                                                <div class="centered_buttons">

                                                    <a href="#" class="button_dark_grey middle_btn quick_view" data-modal-url="modals/quick_view.html">Quick View</a>

                                                    <a href="#" class="addtocart button_blue middle_btn add_to_cart" data-id="{{$todaydeal->id}}">Add to Cart</a>

                                                </div><!--/ .centered_buttons -->

                                                <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_wishlist tooltip_container"><span class="tooltip right">Add to Wishlist</span></a>

                                                <a href="#" class="button_dark_grey def_icon_btn middle_btn add_to_compare tooltip_container"><span class="tooltip left">Add to Compare</span></a>

                                            </div><!--/ .actions_wrap-->

                                            <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                        </div><!--/. image_wrap-->

                                        <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                        <div class="description">

                                            <a href="#">{{$todaydeal->P_name}}</a>

                                            <div class="clearfix product_info">

                                                <p class="product_price alignleft"><b>{{$todaydeal->P_total_retail_price}}</b></p>

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

                                                <li><a href="#" class="addtocart button_blue middle_btn add_to_cart" data-id="{{$todaydeal->id}}">Add to Cart</a></li>

                                                <li><a href="#" class="icon_link"><i class="icon-heart-5"></i>Add to Wishlist</a></li>

                                                <li><a href="#" class="icon_link"><i class="icon-resize-small"></i>Add to Compare</a></li>

                                            </ul>

                                        </div>

                                        <!-- - - - - - - - - - - - - - Product price & actions (only for list view) - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .product_item-->

                                </div>

                                <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->
                            @endforeach

                        </div><!--/ .table_row -->


                    </div><!--/ .table_layout -->

                    <footer class="bottom_box on_the_sides">

                        <div class="left_side">

                            <p>Showing 1 to 3 of 45 (15 Pages)</p>

                        </div>
                        <div class="right_side">

                            {{$todaydeals->render()}}
                        </div>

                    </footer>

                </div>

                <!-- - - - - - - - - - - - - - End of products - - - - - - - - - - - - - - - - -->



            </div>



        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->
    @include('includes.script')
    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

@endsection