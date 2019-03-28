@extends('layouts.master')

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


@section('information')

    @foreach($information as $x)
        <li><a href="#">{{$x->info}}</a></li>
    @endforeach

@endsection

@section('extrainformation')

    @foreach($extra as $y)
        <li><a href="#">{{$y->extra}}</a></li>
    @endforeach


@endsection

@section('my_account')

    @foreach($account as $z)
        <li><a href="#">{{$z->info}}</a></li>

    @endforeach

@endsection


@section('copyright')
    {{$copyright->copyright}}
@endsection

@section('about_us')
    {{$result->about_us}}
    @endsection

@section('category')
@foreach($pro as $categories)
<li class="animated_item"><a href="#">{{$categories->name}}</a></li>
@endforeach
@endsection




@section('content')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>




    <!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->

    <div class="page_wrapper">

        <div class="container">

            <div class="row">

                <!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

                <aside class="col-md-3 col-sm-4 has_mega_menu">

                    <!-- - - - - - - - - - - - - - Today's deals - - - - - - - - - - - - - - - - -->

                    <section class="section_offset animated transparent" data-animation="fadeInDown">

                        <h3 class="widget_title">Today's Deals</h3>



                        <!-- - - - - - - - - - - - - - Carousel of today's deals - - - - - - - - - - - - - - - - -->

                        <div class="owl_carousel widgets_carousel">

                           @foreach($products as $product)
                               @if($product->today_deal)


                                    <div class="product_item">

                                        <!-- - - - - - - - - - - - - - Thumbnail - - - - - - - - - - - - - - - - -->

                                        <div class="image_wrap">

                                            <img src="{{$product->photo->file}}" alt="">

                                            <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                            <div class="actions_wrap">

                                                <div class="centered_buttons">

                                                    <button><a href="#" class="button_dark_grey middle_btn quick_view" data-toggle="modal" data-target="#quickview" data-modal-url="proassets/modals/quick_view.html">Quick View</a></button>


                                                    <a href="#" class="addtocart button_blue middle_btn add_to_cart" data-id="{{$product->id}}">Add to Cart</a>
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

                                            <div>{{$product->P_discount_id}}%</div>OFF

                                        </div>

                                        <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Countdown - - - - - - - - - - - - - - - - -->

                                        <div class="countdown" data-year="2016" data-month="11" data-day="6" data-hours="15" data-minutes="0" data-seconds="0"></div>

                                        <!-- - - - - - - - - - - - - - End countdown - - - - - - - - - - - - - - - - -->

                                        <!-- - - - - - - - - - - - - - Product description - - - - - - - - - - - - - - - - -->

                                        <div class="description">

                                            <p><a href="#">{{$product->P_specification}}</a></p>

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

                                                <p class="product_price alignleft"><s>{{$product->P_mrp}}</s> <b>{{$product->P_total_retail_price}}</b></p>

                                            </div><!--/ .clearfix.product_info-->

                                        </div>

                                        <!-- - - - - - - - - - - - - - End of product description - - - - - - - - - - - - - - - - -->

                                    </div><!--/ .product_item-->

                                   @endif

                               @endforeach
                            <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->



                            <!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->


                        </div><!--/ .widgets_carousel-->

                        <!-- - - - - - - - - - - - - - End of carousel of today's deals - - - - - - - - - - - - - - - - -->






                        <!-- - - - - - - - - - - - - - View all deals of the day - - - - - - - - - - - - - - - - -->

                        <footer class="bottom_box">

                            <a href="#" class="button_grey middle_btn">View All Deals</a>

                        </footer>

                        <!-- - - - - - - - - - - - - - End of view all deals of the day - - - - - - - - - - - - - - - - -->

                    </section><!--/ .section_offset.animated.transparent-->

                    <!-- - - - - - - - - - - - - - End of today's deals - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Categories - - - - - - - - - - - - - - - - -->

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

                    </section><!--/ .animated.transparent-->

                    <!-- - - - - - - - - - - - - - End of categories - - - - - - - - - - - - - - - - -->




                    <!-- - - - - - - - - - - - - - Testimonials - - - - - - - - - - - - - - - - -->

                    {{--<section class="section_offset animated transparent" data-animation="fadeInDown">--}}

                        {{--<h3>Testimonials</h3>--}}

                        {{--<!-- - - - - - - - - - - - - - Carousel of testimonials - - - - - - - - - - - - - - - - -->--}}

                        {{--<div class="owl_carousel widgets_carousel">--}}

                            {{--<!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->--}}

                            {{--<blockquote>--}}

                                {{--<div class="author_info"><b>Alan, Los Angeles</b></div>--}}

                                {{--<p>Ut tellus dolor, dapibus eget, elementum vel, cursus elefiend, elit. Aenean wisi et urna. Aliquam erat volutpat. Duis ac turpis.</p>--}}

                            {{--</blockquote>--}}

                            {{--<!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->--}}

                            {{--<!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->--}}

                            {{--<blockquote>--}}

                                {{--<div class="author_info"><b>Tracy, New York</b></div>--}}

                                {{--<p>Donec sit amet eros. Lorem ipsum dolor sit amet elit. Mauris amet fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget.</p>--}}

                            {{--</blockquote>--}}

                            {{--<!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->--}}

                            {{--<!-- - - - - - - - - - - - - - Testimonial - - - - - - - - - - - - - - - - -->--}}

                            {{--<blockquote>--}}

                                {{--<div class="author_info"><b>Nikki, Boston</b></div>--}}

                                {{--<p>Ut tellus dolor, dapibus eget, elementum vel, cursus elefiend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat.</p>--}}

                            {{--</blockquote>--}}

                            {{--<!-- - - - - - - - - - - - - - End testimonial - - - - - - - - - - - - - - - - -->--}}

                        {{--</div><!--/ .widgets_carousel-->--}}

                        {{--<!-- - - - - - - - - - - - - - End of carousel of testimonials - - - - - - - - - - - - - - - - -->--}}

                        {{--<!-- - - - - - - - - - - - - - View all testimonials - - - - - - - - - - - - - - - - -->--}}

                        {{--<footer class="bottom_box">--}}

                            {{--<a href="#" class="button_grey middle_btn">View All Testimonials</a>--}}

                        {{--</footer>--}}

                        {{--<!-- - - - - - - - - - - - - - End of view all testimonials - - - - - - - - - - - - - - - - -->--}}

                    {{--</section><!--/ .section_offset.animated.transparent-->--}}

                    <!-- - - - - - - - - - - - - - End of testimonials - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Bestseller Products - - - - - - - - - - - - - - - - -->

                    {{--<section class="section_offset animated transparent" data-animation="fadeInDown">--}}

                        {{--<h3>Bestseller Products</h3>--}}

                        {{--<ul class="products_list_widget">--}}

                            {{--<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->--}}

                            {{--<li>--}}

                                {{--<a href="#" class="product_thumb">--}}

                                    {{--<img src="/proassets/images/product_thumb_4.jpg" alt="">--}}

                                {{--</a>--}}

                                {{--<div class="wrapper">--}}

                                    {{--<a href="#" class="product_title">Fusce  Euismod Consequat Ante...</a>--}}

                                    {{--<div class="clearfix product_info">--}}

                                        {{--<p class="product_price alignleft"><b>₹25000</b></p>--}}

                                        {{--<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->--}}

                                        {{--<ul class="rating alignright">--}}

                                            {{--<li class="active"></li>--}}
                                            {{--<li class="active"></li>--}}
                                            {{--<li class="active"></li>--}}
                                            {{--<li class="active"></li>--}}
                                            {{--<li></li>--}}

                                        {{--</ul>--}}

                                        {{--<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->--}}

                                    {{--</div>--}}

                                {{--</div>--}}

                            {{--</li>--}}

                            {{--<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->--}}

                            {{--<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->--}}

                            {{--<li>--}}

                                {{--<a href="#" class="product_thumb">--}}

                                    {{--<img src="/proassets/images/product_thumb_5.jpg" alt="">--}}

                                {{--</a>--}}

                                {{--<div class="wrapper">--}}

                                    {{--<a href="#" class="product_title">Lorem  Ipsum Dolor Sit Amet...</a>--}}

                                    {{--<div class="clearfix product_info">--}}

                                        {{--<p class="product_price alignleft"><b>₹23000</b></p>--}}

                                        {{--<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->--}}

                                        {{--<ul class="rating alignright">--}}

                                            {{--<li class="active"></li>--}}
                                            {{--<li class="active"></li>--}}
                                            {{--<li class="active"></li>--}}
                                            {{--<li class="active"></li>--}}
                                            {{--<li class="active"></li>--}}

                                        {{--</ul>--}}

                                        {{--<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->--}}

                                    {{--</div>--}}

                                {{--</div>--}}

                            {{--</li>--}}

                            {{--<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->--}}

                            {{--<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->--}}

                            {{--<li>--}}

                                {{--<a href="#" class="product_thumb">--}}

                                    {{--<img src="/proassets/images/product_thumb_6.jpg" alt="">--}}

                                {{--</a>--}}

                                {{--<div class="wrapper">--}}

                                    {{--<a href="#" class="product_title">Ut Tellus  Dolor Dapibus Eget...</a>--}}

                                    {{--<div class="clearfix product_info">--}}

                                        {{--<p class="product_price alignleft"><b>₹20000</b></p>--}}

                                        {{--<!-- - - - - - - - - - - - - - Product rating - - - - - - - - - - - - - - - - -->--}}

                                        {{--<ul class="rating alignright">--}}

                                            {{--<li class="active"></li>--}}
                                            {{--<li class="active"></li>--}}
                                            {{--<li class="active"></li>--}}
                                            {{--<li class="active"></li>--}}
                                            {{--<li class="active"></li>--}}

                                        {{--</ul>--}}

                                        {{--<!-- - - - - - - - - - - - - - End of product rating - - - - - - - - - - - - - - - - -->--}}

                                    {{--</div>--}}

                                {{--</div>--}}

                            {{--</li>--}}

                            {{--<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->--}}

                        {{--</ul><!--/ .list_of_products-->--}}

                        {{--<!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->--}}

                        {{--<footer class="bottom_box">--}}

                            {{--<a href="#" class="button_grey middle_btn">View All</a>--}}

                        {{--</footer>--}}

                        {{--<!-- - - - - - - - - - - - - -End of view all products - - - - - - - - - - - - - - - - -->--}}

                    {{--</section>--}}

                    <!-- - - - - - - - - - - - - - End of Bestseller Products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Banner - - - - - - - - - - - - - - - - -->

                    {{--<div class="section_offset animated transparent" data-animation="fadeInDown">--}}

                        {{--<a href="#">--}}

                            {{--<img src="/proassets/images/banner_img_11.png" alt="">--}}

                        {{--</a>--}}

                    {{--</div>--}}

                    <!-- - - - - - - - - - - - - - End of banner - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - On Sale Products - - - - - - - - - - - - - - - - -->

                    {{--<section class="section_offset animated transparent" data-animation="fadeInDown">--}}

                        {{--<h3>On Sale Products</h3>--}}

                        {{--<ul class="products_list_widget">--}}

                            {{--<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->--}}

                            {{--<li>--}}

                                {{--<a href="#" class="product_thumb">--}}

                                    {{--<img src="/proassets/images/product_thumb_10.jpg" alt="">--}}

                                {{--</a>--}}

                                {{--<div class="wrapper">--}}

                                    {{--<a href="#" class="product_title">Fusce Euismod Consequat Ante...</a>--}}

                                    {{--<div class="clearfix product_info">--}}

                                        {{--<p class="product_price alignleft"><s>$29.99</s> <b>$21.99</b></p>--}}

                                    {{--</div>--}}

                                {{--</div>--}}

                            {{--</li>--}}

                            {{--<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->--}}

                            {{--<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->--}}

                            {{--<li>--}}

                                {{--<a href="#" class="product_thumb">--}}

                                    {{--<img src="/proassets/images/product_thumb_11.jpg" alt="">--}}

                                {{--</a>--}}

                                {{--<div class="wrapper">--}}

                                    {{--<a href="#" class="product_title">Lorem Ipsum Dolor Sit Amet...</a>--}}

                                    {{--<div class="clearfix product_info">--}}

                                        {{--<p class="product_price alignleft"><s>$19.99</s> <b>$13.99</b></p>--}}

                                    {{--</div>--}}

                                {{--</div>--}}

                            {{--</li>--}}

                            {{--<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->--}}

                            {{--<!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->--}}

                            {{--<li>--}}

                                {{--<a href="#" class="product_thumb">--}}

                                    {{--<img src="/proassets/images/product_thumb_12.jpg" alt="">--}}

                                {{--</a>--}}

                                {{--<div class="wrapper">--}}

                                    {{--<a href="#" class="product_title">Lorem Ipsum Dolor Sit Amet...</a>--}}

                                    {{--<div class="clearfix product_info">--}}

                                        {{--<p class="product_price alignleft"><s>$5.99</s> <b>$2.99</b></p>--}}

                                    {{--</div>--}}

                                {{--</div>--}}

                            {{--</li>--}}

                            {{--<!-- - - - - - - - - - - - - - End of product - - - - - - - - - - - - - - - - -->--}}

                        {{--</ul><!--/ .list_of_products-->--}}

                        {{--<!-- - - - - - - - - - - - - - View all products - - - - - - - - - - - - - - - - -->--}}

                        {{--<footer class="bottom_box">--}}

                            {{--<a href="#" class="button_grey middle_btn">View All</a>--}}

                        {{--</footer>--}}

                        {{--<!-- - - - - - - - - - - - - -End of view all products - - - - - - - - - - - - - - - - -->--}}

                    {{--</section>--}}

                    <!-- - - - - - - - - - - - - - End of On Sale Products - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

                    {{--<section class="section_offset animated transparent" data-animation="fadeInDown">--}}

                        {{--<h3>Sign Up to Our Newsletter</h3>--}}

                        {{--<div class="theme_box">--}}

                            {{--<p class="form_caption">Sing up to our newsletter and get exclusive deals you wont find any- where else straight to your inbox!</p>--}}

                            {{--<form class="newsletter subscribe clearfix" novalidate>--}}

                                {{--<input type="email" name="sc_email" placeholder="Enter your email address">--}}

                                {{--<button class="button_blue def_icon_btn"></button>--}}

                            {{--</form>--}}

                        {{--</div><!--/ .theme_box-->--}}

                    {{--</section>--}}

                    <!-- - - - - - - - - - - - - - End of Sign Up to Our Newsletter - - - - - - - - - - - - - - - - -->

                </aside><!--/ [col]-->

                <!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

                <!-- - - - - - - - - - - - - - Main slider - - - - - - - - - - - - - - - - -->

                <main class="col-md-9 col-sm-8">

                    <div class="section_offset animated transparent" data-animation="fadeInDown">

                        <!-- - - - - - - - - - - - - - Revolution slider - - - - - - - - - - - - - - - - -->

                        <div class="revolution_slider">

                            <div class="rev_slider">


                                <ul>

                                @foreach($banners as $banner)
                                    <!-- - - - - - - - - - - - - - Slide 1 - - - - - - - - - - - - - - - - -->

                                        <li data-transition="papercut" data-slotamount="7">

                                            <img src="{{URL::to('/')}}/images/{{$banner->file}}" alt=""  style="width:847px;height:380px">

                                            <div class="caption sfl stl layer_1" data-x="left" data-hoffset="60" data-y="90" data-easing="easeOutBack" data-speed="600" data-start="900">{{$banner->title}}</div>

                                            <div class="caption sfl stl layer_2" data-x="left" data-y="138" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1000">{{$banner->content1}}</div>

                                            <div class="caption sfl stl layer_3" data-x="left" data-y="190" data-hoffset="60" data-easing="easeOutBack" data-speed="600" data-start="1100">{{$banner->content2}}</div>

                                            <div class="caption sfb stb" data-x="left" data-y="245" data-hoffset="60" data-easing="easeOutBack" data-speed="700" data-start="1100">
                                                <a href="{{$banner->path}}" class="button_blue big_btn">{{$banner->button}}</a>
                                            </div>

                                        </li>

                                        <!-- - - - - - - - - - - - - - End of Slide 1 - - - - - - - - - - - - - - - - -->
                                    @endforeach


                                </ul>

                            </div><!--/ .rev_slider-->

                        </div><!--/ .revolution_slider-->

                        <!-- - - - - - - - - - - - - - End of Revolution slider - - - - - - - - - - - - - - - - -->

                    </div><!--/ .section_offset -->

                    <!-- - - - - - - - - - - - - - Banners - - - - - - - - - - - - - - - - -->

                    <div class="section_offset">

                        <div class="row">

                            <div class="col-sm-6">

                                <a href="#" class="banner animated transparent" data-animation="fadeInDown">

                                    <img src="/images/banner2.jpg" alt="">

                                </a>

                            </div><!--/ [col]-->

                            <div class="col-sm-6">

                                <a href="#" class="banner animated transparent" data-animation="fadeInDown" data-animation-delay="150">

                                    <img src="/images/banner3.jpg" alt="">

                                </a>

                            </div><!--/ [col]-->

                        </div><!--/ .row-->

                    </div><!--/ .section_offset-->

                    <!-- - - - - - - - - - - - - - End of banners - - - - - - - - - - - - - - - - -->

                    <!-- - - - - - - - - - - - - - Medicine & Health - - - - - - - - - - - - - - - - -->

                    @foreach($pro as $categories)
                        <section class="section_offset animated transparent" data-animation="fadeInDown">

                            <h3>{{$categories->name}}</h3>

                            <!-- - - - - - - - - - - - - - Tabs - - - - - - - - - - - - - - - - -->

                            <div class="tabs type_2 products">

                                <!-- - - - - - - - - - - - - - Navigation of tabs - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - categories ka naam ayega sirf - - - - - - - - - - - - - - - - -->

                                <ul class="tabs_nav clearfix">



                                    @foreach($categories->subcategories as $bcategories)

                                        <li><a href="#tab-{{$bcategories->id}}">{{$bcategories->name}}</a></li>

                                    @endforeach


                                </ul>



                                <!-- - - - - - - - - - - - - - End navigation of tabs - - - - - - - - - - - - - - - - -->

                                <!-- - - - - - - - - - - - - - Tabs container - - - - - - - - - - - - - - - - -->

                                <div class="tab_containers_wrap">

                                    @foreach($categories->subcategories as $bcategories)

                                        <div id="tab-{{$bcategories->id}}" class="tab_container">

                                            <!-- - - - - - - - - - - - - - Carousel of featured products - - - - - - - - - - - - - - - - -->

                                            <div class="owl_carousel carousel_in_tabs">


                                            @foreach($categories->products as $pros)
                                                @if($bcategories->id == $pros->subcategory_id)

                                                    <!-- - - - - - - - - - - - - - Product - - - - - - - - - - - - - - - - -->

                                                        <div class="product_item type_2">



                                                            <!-- - - - - - - - - - - - - - Thumbmnail - - - - - - - - - - - - - - - - -->

                                                            <div class="image_wrap">

                                                                <img src="{{URL::to('/')}}{{$pros->photo->file}}" style="width:282px;height:200px">



                                                                <!-- - - - - - - - - - - - - - Product actions - - - - - - - - - - - - - - - - -->

                                                                <div class="actions_wrap">

                                                                    <div class="centered_buttons">



                                                                        <button type="button" data-toggle="modal" data-target="#quickview" class="button_dark_grey middle_btn quick_view">Quick view</button>
                                                                    </div><!--/ .centered_buttons -->


                                                                </div><!--/ .actions_wrap-->
                                                                {{--quick view modal--}}



                                                                <!-- - - - - - - - - - - - - - End of product actions - - - - - - - - - - - - - - - - -->

                                                            </div><!--/. image_wrap-->

                                                            <!-- - - - - - - - - - - - - - End thumbmnail - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Label - - - - - - - - - - - - - - - - -->

                                                            <div class="label_new">New</div>

                                                            <!-- - - - - - - - - - - - - - End label - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Product title & price - - - - - - - - - - - - - - - - -->

                                                            <div class="description">


                                                                <a href="{{route('product.details',$pros->id)}}">{{$pros->P_name}}</a>



                                                                <div class="clearfix product_info">

                                                                    <p class="product_price alignleft"><b>₹{{$pros->P_total_retail_price}}</b></p>

                                                                </div>

                                                            </div>


                                                            <!-- - - - - - - - - - - - - - End of product title & price - - - - - - - - - - - - - - - - -->

                                                            <!-- - - - - - - - - - - - - - Actions - - - - - - - - - - - - - - - - -->

                                                            <div class="buttons_row">
                                                                <button class=" addtocart button_blue middle_btn" name="addtocart" data-id="{{$pros->id}}" >Add to Cart</button>

                                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_wishlist tooltip_container"><span class="tooltip top">Add to Wishlist</span></button>

                                                                <button class="button_dark_grey middle_btn def_icon_btn add_to_compare tooltip_container"><span class="tooltip top">Add to Compare</span></button>

                                                            </div>

                                                            <!-- - - - - - - - - - - - - - End of actions - - - - - - - - - - - - - - - - -->


                                                        </div><!--/ .product_item-->

                                                        <!-- - - - - - - - - - - - - - End product - - - - - - - - - - - - - - - - -->

                                                    @endif
                                                @endforeach


                                            </div><!--/ .sh_container-->

                                            <!-- - - - - - - - - - - - - - End of carousel of featured products - - - - - - - - - - - - - - - - -->

                                            <!-- - - - - - - - - - - - - - View all - - - - - - - - - - - - - - - - -->

                                            <footer class="bottom_box">

                                                <a href="/subcrproducts/{{$bcategories->id}}" class="button_grey middle_btn">View All Products</a>

                                            </footer>

                                            <!-- - - - - - - - - - - - - - End of view all - - - - - - - - - - - - - - - - -->

                                        </div><!--/ #tab-1-->

                                    @endforeach

                                </div>

                                <!-- - - - - - - - - - - - - - End of tabs containers - - - - - - - - - - - - - - - - -->

                            </div><!--/ .tabs.section_offset-->

                            <!-- - - - - - - - - - - - - - End of tabs - - - - - - - - - - - - - - - - -->

                        </section><!--/ .section_offset -->
                    @endforeach
                <!-- - - - - - - - - - - - - - End of Medicine & Health - - - - - - - - - - - - - - - - -->

                  @include('includes.script')


                </main><!--/ [col]-->

                <!-- - - - - - - - - - - - - - End of main slider - - - - - - - - - - - - - - - - -->

            </div><!--/ .row-->

        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->

    <!-- - - - - - - - - - - - - - End Page Wrapper - - - - - - - - - - - - - - - - -->

@endsection
