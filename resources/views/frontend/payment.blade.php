@extends('layouts.master')

@section('content')

    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" ></script>

    <div class="secondary_page_wrapper">

        <div class="container">

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

            <ul class="breadcrumbs">

                <li><a href="index.html">Home</a></li>
                <li>Payment</li>

            </ul>

            <h1 class="page_title">Payment</h1>

            <!-- - - - - - - - - - - - - - Checkout method - - - - - - - - - - - - - - - - -->



            <!-- - - - - - - - - - - - - - End of checkout method - - - - - - - - - - - - - - - - -->



            <!-- - - - - - - - - - - - - - Shipping information - - - - - - - - - - - - - - - - -->


            <!-- - - - - - - - - - - - - - End of billing information - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Shipping method - - - - - - - - - - - - - - - - -->




            <!-- - - - - - - - - - - - - - End of shipping method - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Payment information - - - - - - - - - - - - - - - - -->
            <br>
            <section class="section_offset">

                <h3>Payment Information</h3>
                <form>
                    {{csrf_field()}}
                <div class="theme_box">

                    <a class="icon_btn button_dark_grey edit_button" href="#"><i class="icon-pencil"></i></a>

                    <p class="subcaption bold"></p>

                    <ul class="simple_vertical_list">

                        <li>

                            <input type="radio"  name="radio_4" value="Cash on Delivery" id="radio_button_5">
                            <label for="radio_button_5">Cash On Delivery</label>

                        </li>

                        <li>

                            <input type="radio" name="radio_4" value="Online Payment" id="radio_button_6">
                            <label for="radio_button_6">Online Payment</label>

                        </li>

                    </ul>

                </div>
                </form>

            </section>


            <!-- - - - - - - - - - - - - - End of payment information - - - - - - - - - - - - - - - - -->

            <!-- - - - - - - - - - - - - - Order review - - - - - - - - - - - - - - - - -->

            <section class="section_offset">

                <h3>Order Review</h3>

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
                        @foreach($cart as $carts)
                            <tr>

                                <td data-title="Product Name">

                                    <a href="#" class="product_title">{{$carts->name}}</a>


                                </td>



                                <td data-title="Price" class="subtotal">{{$carts->price}}</td>

                                <td data-title="Quantity">{{$carts->qty}}</td>

                                <td data-title="Total" class="total">{{$carts->total}}</td>

                            </tr>
                        @endforeach


                        </tbody>

                        <tfoot>

                        <tr>

                            <td colspan="4" class="bold">Subtotal</td>
                            <td class="total">{{$subtotal}}</td>

                        </tr>

                        <tr>

                            <td colspan="4" class="bold">Shipping &amp; Heading (Flat Rate - Fixed)</td>
                            <td class="total">{{$total}}</td>

                        </tr>

                        <tr>

                            <td colspan="4" class="grandtotal">Grand Total</td>
                            <td class="grandtotal">{{$total}}</td>

                        </tr>

                        </tfoot>

                    </table>

                </div><!--/ .table_wrap -->

                <footer class="bottom_box on_the_sides">

                    <div class="left_side v_centered">

                        <span>Forgot an item?</span>

                        <a href="/cart" class="button_grey middle_btn">Edit Your Cart</a>

                    </div>

                    <div class="right_side">

                        <button class="button_blue middle_btn" id="placeorder">Place Order</button>

                    </div>

                </footer>


            </section>

            <!-- - - - - - - - - - - - - - End of order review - - - - - - - - - - - - - - - - -->

        </div><!--/ .container-->

    </div><!--/ .page_wrapper-->



    <script type="text/javascript">

        jQuery(document).ready(function ()
        {
            jQuery('#placeorder').on('click',function(){



                var radio=$("input[name='radio_4']:checked").val();
                if(radio){
                    $.ajax({
                        url:'/paymentinfo',
                        method:'post',
                        data:{
                            '_token':$('input[name=_token]').val(),
                            'payment':radio,
                        },
                        success:function (response) {

                            swal("Success", "Thankyou for shopping with us","success");
                            window.location.href = "/";


                            //    switch to the next page
                            // payment page+6
                        }
                    });


                }
            });
        });
    </script>
    @endsection