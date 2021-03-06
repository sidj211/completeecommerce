@extends('layouts.master')


@section('content')

    <div class="secondary_page_wrapper">

        <div class="container">

            <!-- - - - - - - - - - - - - - Breadcrumbs - - - - - - - - - - - - - - - - -->

            <ul class="breadcrumbs">

                <li><a href="index.html">Home</a></li>
                <li>My Account</li>

            </ul>

            <!-- - - - - - - - - - - - - - End of breadcrumbs - - - - - - - - - - - - - - - - -->

            <div class="row">

                <aside class="col-md-3 col-sm-4">

                    <!-- - - - - - - - - - - - - - Information - - - - - - - - - - - - - - - - -->

                    <section class="section_offset">

                        <h3>My Account</h3>

                        <ul class="theme_menu">

                            <li class="active"><a href="#">Account Dashboard</a></li>
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

                    <h1>My Dashboard</h1>

                    <section class="theme_box">

                        <h4>Hello, John Doe!</h4>

                        <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>

                    </section><!--/ .theme_box -->

                    <!-- - - - - - - - - - - - - - Contact information - - - - - - - - - - - - - - - - -->

                    <section class="theme_box">

                        <h4>Contact Information</h4>

                        <p>John Doe<br><a href="#" class="mail_to">john.doe@gmail.com</a></p>

                        <div class="buttons_row">

                            <a href="#" class="button_grey middle_btn">Edit Account Information</a>

                            <a href="#" class="button_grey middle_btn">Change Password</a>

                        </div>

                    </section><!--/ .theme_box -->

                    <!-- - - - - - - - - - - - - - End of contact information - - - - - - - - - - - - - - - - -->

                    <div class="table_layout">

                        <div class="table_row">

                            <div class="table_cell">

                                <!-- - - - - - - - - - - - - - Newsletter - - - - - - - - - - - - - - - - -->

                                <section>

                                    <h4>Newsletter</h4>

                                    <p>You are currently not subscribed to any newsletter.</p>

                                    <a href="#" class="button_grey middle_btn">Edit Subscription</a>

                                </section>

                                <!-- - - - - - - - - - - - - - End of newsletter - - - - - - - - - - - - - - - - -->

                            </div><!--/ .table_cell -->

                            <div class="table_cell">

                                <!-- - - - - - - - - - - - - - Address book - - - - - - - - - - - - - - - - -->

                                <section>

                                    <h4>Address Book</h4>

                                    <a href="#" class="button_grey middle_btn">Manage Addresses</a>

                                </section>

                                <!-- - - - - - - - - - - - - - End of address book - - - - - - - - - - - - - - - - -->

                            </div><!--/ .table_cell -->

                        </div><!--/ .table_row -->

                        <div class="table_row">

                            <div class="table_cell">

                                <!-- - - - - - - - - - - - - - Default billing address - - - - - - - - - - - - - - - - -->

                                <section>

                                    <h4>Default Billing Address</h4>

                                    <p>You have not set a default billing address.</p>

                                    <a href="#" class="button_grey middle_btn">Edit Address</a>

                                </section>

                                <!-- - - - - - - - - - - - - - End of default billing address - - - - - - - - - - - - - - - - -->

                            </div><!--/ .table_cell -->

                            <div class="table_cell">

                                <!-- - - - - - - - - - - - - - Default shipping address - - - - - - - - - - - - - - - - -->

                                <section>

                                    <h4>Default Shipping Address</h4>

                                    <p>You have not set a default shipping address.</p>

                                    <a href="#" class="button_grey middle_btn">Edit Address</a>

                                </section>

                                <!-- - - - - - - - - - - - - - End of default shipping address - - - - - - - - - - - - - - - - -->

                            </div><!--/ .table_cell -->

                        </div><!--/ .table_row -->

                    </div><!--/ .table_layout -->

                </main><!--/ [col]-->

            </div><!--/ .row-->

        </div><!--/ .container-->

    </div>

@endsection