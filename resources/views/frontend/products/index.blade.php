@extends('layouts.adminpanel')

@section('content')
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    <!-- Page wrapper  -->
    <!-- ============================================================== -->
    <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h4 class="text-themecolor">Add Products</h4>
                </div>
                <div class="col-md-7 align-self-center text-right">
                    <div class="d-flex justify-content-end align-items-center">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Add Products</li>
                        </ol>

                        <button type="button" data-toggle="modal" data-target="#example" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                            <div class="modal-dialog" style="max-width: 1200px;" role="document">
                                <div class="modal-content"  >
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="exampleModalLabel1">New message</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">

                                        <!-- Column -->
                                        <div class="col-lg-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    {!! Form::open(['method'=>'post','action'=>'ProductController@store','files'=>true]) !!}
                                                    {{csrf_field()}}

                                                    <div class="form-body">
                                                        <h5 class="card-title">About Product</h5>
                                                        <hr>
                                                        <!-- =====product and subtext======================================== -->
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Product Name</label>
                                                                    <input name="P_name"  id="P_name" type="text" class="form-control" placeholder="price" aria-describedby="basic-addon1">

                                                                </div>
                                                            </div>
                                                            <!--/span-->

                                                            <!--/span-->
                                                        </div>
                                                        <!-- =====category and subcategory======================= -->

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="Category" class="control-label" style="float: left;"  >Category</label>
                                                                    <select name="Category" class="form-control" >
                                                                        <option value="">Select Category</option>
                                                                        @foreach($categories as $key=>$value)
                                                                            <option value="{{$key}}">{{$value}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label style="float: left;" for="subcategory_id" class="control-label">Sub Category</label>
                                                                    <select name="subcategory_id" class="form-control" >
                                                                        <option value="">Select SubCategory</option>

                                                                    </select>
                                                                </div>
                                                            </div>


                                                            <!--/span-->
                                                        </div>

                                                        <!-- =====cost tax and total cost==================== -->
                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Cost Price</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                                        </div>
                                                                        <input name="P_cost_price"  id="costprice" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Tax</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                                        </div>
                                                                        <select name="P_tax_id" id="costtax" class="form-control">
                                                                            <option value="" >Select Tax</option>
                                                                            @foreach($taxes as $key=>$value)
                                                                                <option value="{{$key}}">{{$value}}</option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Total cost Price</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                                        </div>
                                                                        <input name="P_total_cost" id="final" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1 " readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->

                                                        </div>

                                                        <!-- ===== Mrp and Discount==================== -->
                                                        <div class="row">


                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >MRP</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                                        </div>
                                                                        <input  name="P_mrp" id="" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Discount</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                                        </div>
                                                                        <input id="discount" name="P_discount_id" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->


                                                        </div>

                                                        <!-- =====retail tax total retail===================== -->
                                                        <div class="row">


                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Retail Price</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                                        </div>
                                                                        <input name="P_retail_price" id="retailprice" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Retail Tax</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                                        </div>
                                                                        <select name="P_retail_tax_id" id="retailtax" class="form-control">
                                                                            <option value="" >Select Tax</option>
                                                                            @foreach($retailtaxes as $key=>$value)
                                                                                <option value="{{$key}}">{{$value}}</option>
                                                                            @endforeach

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Total Retail Price</label>
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                                        </div>
                                                                        <input name="P_total_retail_price" id="finalretailprice" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Manufacturing Date</label>
                                                                    <input name="P_manufacture_date" type="text" id="firstName" class="form-control" placeholder="Y-m-d H : i : s" > </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Expiry Date</label>
                                                                    <input name="P_expiry_date" type="text" id="lastName" class="form-control" placeholder="Y-m-d H : i : s"> </div>
                                                            </div>
                                                            <!--/span-->
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Quantity</label>
                                                                    <input name="P_quantity" type="text" id="firstName" class="form-control" placeholder="Enter Quantity"> </div>
                                                            </div>
                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Warranty</label>
                                                                    <input  name="P_warranty" type="text"  class="form-control" placeholder="Enter duration"> </div>
                                                            </div>

                                                            <!--/span-->
                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Condition</label>
                                                                    <input name="P_condition" type="text" class="form-control" placeholder="Describe condition"> </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">

                                                            <!--/span-->
                                                            <div class="col-md-3">
                                                                <h5 class="card-title m-t-20">Upload Image</h5>
                                                                <div class="product-img"> <img src="../apassets/images/gallery/chair.jpg">
                                                                    <div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="bg-danger"><i class="ti-trash"></i></a></div>
                                                                    <br/>

                                                                    <div class="form-group" >
                                                                        {!! Form::label('photo_id','Photo:') !!}
                                                                        {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

                                                                    </div>


                                                                </div>

                                                            </div>

                                                            {{-- uploading the image--}}


                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-12 ">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float:left;" >Product Description</label>
                                                                    <textarea name="P_description" class="form-control" rows="4">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea>
                                                                </div>
                                                            </div>
                                                        </div>




                                                        <div class="row">
                                                            <div class="col-md-12 ">
                                                                <div class="form-group">
                                                                    <label class="control-label" style="float: left;" >Product Specification</label>
                                                                    <textarea name="P_specification" class="form-control" rows="4">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/row-->
                                                        <div class="row">

                                                            <div class="col-md-4">
                                                                <div class="form-group">
                                                                    <label for="P_status" class="control-label">Status</label>
                                                                    <select name="P_status" class="form-control" >
                                                                        <option value="">Select status</option>
                                                                        <option value="1">Active</option>
                                                                        <option value="0">InActive</option>

                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                    </div>
                                                    <div class="form-actions m-t-40">
                                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Submit</button>
                                                        <button type="button" class="btn btn-dark" data-dismiss="modal" >Cancel</button>
                                                    </div>
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Column -->

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->

            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Manage Products</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>

                                    <th>ID</th>
                                    <th>Name</th>
                                   {{-- <th>Description</th>
                                    <th>Specification</th>--}}
                                   {{-- <th>Warranty</th>
                                    <th>expiry date</th>
                                    <th>Manufacture Date</th>--}}
                                    <th>Quantity</th>
                                    <th>status</th>
                                    <th>condition</th>
                                    <th>discount</th>
                                    <th>subcategory</th>
                                    <th>Photo</th>
                                    <th class="text-nowrap">Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                

                                    @foreach($products as $product)
                                <tr>
                                     <td>{{$product->id}}</td>
                                    <td>{{$product->P_name}}</td>
                                  {{--  <td>{{$product->P_description     }}</td>
                                    <td>{{$product->P_specification   }}</td>--}}
                                    {{--<td>{{$product->P_warranty        }}</td>
                                    <td>{{$product->P_expiry_date}}</td>
                                    <td>{{$product->P_manufacture_date}}</td>--}}
                                    <td>{{$product->P_quantity        }}</td>
                                    <td>{{$product->P_status          }}</td>
                                    <td>{{$product->P_condition}}</td>
                                    <td>{{$product->P_discount_id}}</td>
                                    <td>{{$product->subcategory_id}}</td>
                                    <td><img height=50 src="{{$product->photo ? $product->photo->file:'http://placehold.it/400x400' }}" alt=""  ></td>

                                    <td class="text-nowrap">

                                        <a href="javascript:void(0)" class="edit-modal"
                                           data-id="{{$product->id}}" data-name="{{$product->P_name}}"
                                           data-description="{{$product->P_description}}"
                                           data-specification="{{$product->P_specification}}"
                                           data-warranty="{{$product->P_warranty}}"
                                           data-expirydate="{{$product->P_expiry_date}}"
                                           data-manufacturedate="{{$product->P_manufacture_date}}"
                                           data-quantity="{{$product->P_quantity}}"
                                           data-status="{{$product->P_status}}"
                                           data-condition="{{$product->P_condition}}"
                                           data-discountid="{{$product->P_discount_id}}"
                                           data-subcategoryid="{{$product->subcategory_id}}"
                                           data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>

                                        <a href="javascript:void(0)" class="delete-modal"
                                           data-id="{{$product->id}}" data-name="{{$product->P_name}}" data-description="{{$product->P_description}}" data-specification="{{$product->P_specification}}" data-warranty="{{$product->P_warranty}}"
                                           data-expirydate="{{$product->P_expiry_date}}"
                                           data-manufacturedate="{{$product->P_manufacture_date}}"
                                           data-quantity="{{$product->P_quantity}}"
                                           data-status="{{$product->P_status}}"
                                           data-condition="{{$product->P_condition}}"
                                           data-discountid="{{$product->P_discount_id}}"
                                           data-subcategoryid="{{$product->subcategory_id}}"
                                           data-toggle="tooltip" data-original-title="Close">
                                            <i class="fa fa-close text-danger"></i> </a>

                                        <a href="javascript:void(0)" class="view-modal"
                                           data-id="{{$product->id}}" data-name="{{$product->P_name}}" data-description="{{$product->P_description}}" data-specification="{{$product->P_specification}}" data-warranty="{{$product->P_warranty}}"
                                           data-expirydate="{{$product->P_expiry_date}}"
                                           data-manufacturedate="{{$product->P_manufacture_date}}"
                                           data-quantity="{{$product->P_quantity}}"
                                           data-status="{{$product->P_status}}"
                                           data-condition="{{$product->P_condition}}"
                                           data-discountid="{{$product->P_discount_id}}"
                                           data-subcategoryid="{{$product->subcategory_id}}"
                                           data-toggle="tooltip" data-original-title="view">
                                            <i class="fa fa-eye m-l-10"></i></a>
                                    </td>



                                </tr>


                                @endforeach

                                </tbody>

                            </table>
                            <div class="box-footer clearfix">
                                <div class="pull-left">
                                    {{$products->render()}}

                                </div>



                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- column -->

            {{--edit form modal--}}
            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" style="max-width: 1200px;" role="document">
                    <div class="modal-content"  >
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">

                            <!-- Column -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">

                                        {!! Form::open(['method'=>'post','action'=>'ProductController@store','files'=>true]) !!}
                                        {{csrf_field()}}

                                        <div class="form-body">
                                            <h5 class="card-title">About Product</h5>
                                            <hr>
                                            <!-- =====product and subtext======================================== -->
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Product Name</label>
                                                        <input name="P_name" id="Pname" type="text" class="form-control" placeholder="price" >

                                                    </div>
                                                </div>
                                                <!--/span-->

                                                <!--/span-->
                                            </div>
                                            <!-- =====category and subcategory======================= -->

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="Category" class="control-label" style="float: left;"  >Category</label>
                                                        <select name="Category" class="form-control" >
                                                            <option value="">Select Category</option>
                                                            @foreach($categories as $key=>$value)
                                                                <option value="{{$key}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label style="float: left;" for="subcategory_id" class="control-label">Sub Category</label>
                                                        <select name="subcategory_id" class="form-control" >
                                                            <option value="">Select SubCategory</option>

                                                        </select>
                                                    </div>
                                                </div>


                                                <!--/span-->
                                            </div>

                                            <!-- =====cost tax and total cost==================== -->
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Cost Price</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                            </div>
                                                            <input name="P_cost_price"  id="costprice" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Tax</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                            </div>
                                                            <select name="P_tax_id" id="costtax" class="form-control">
                                                                <option value="" >Select Tax</option>
                                                                @foreach($taxes as $key=>$value)
                                                                    <option value="{{$key}}">{{$value}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Total cost Price</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                            </div>
                                                            <input name="P_total_cost" id="final" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1 " readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->

                                            </div>

                                            <!-- ===== Mrp and Discount==================== -->
                                            <div class="row">


                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >MRP</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                            </div>
                                                            <input  name="P_mrp" id="" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Discount</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                            </div>
                                                            <input id="discount" name="P_discount_id" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->


                                            </div>

                                            <!-- =====retail tax total retail===================== -->
                                            <div class="row">


                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Retail Price</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                            </div>
                                                            <input name="P_retail_price" id="retailprice" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Retail Tax</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                            </div>
                                                            <select name="P_retail_tax_id" id="retailtax" class="form-control">
                                                                <option value="" >Select Tax</option>
                                                                @foreach($retailtaxes as $key=>$value)
                                                                    <option value="{{$key}}">{{$value}}</option>
                                                                @endforeach

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Total Retail Price</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text" id="basic-addon1"><i class="ti-money"></i></span>
                                                            </div>
                                                            <input name="P_total_retail_price" id="finalretailprice" type="text" class="form-control" placeholder="price" aria-label="price" aria-describedby="basic-addon1" readonly>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Manufacturing Date</label>
                                                        <input name="P_manufacture_date" type="text" id="P_manufacture_date" class="form-control" placeholder="Y-m-d H : i : s" > </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Expiry Date</label>
                                                        <input name="P_expiry_date" type="text" id="P_expiry_date" class="form-control" placeholder="Y-m-d H : i : s"> </div>
                                                </div>
                                                <!--/span-->
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Quantity</label>
                                                        <input name="P_quantity" type="text" id="P_quantity" class="form-control" placeholder="Enter Quantity"> </div>
                                                </div>
                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Warranty</label>
                                                        <input  name="P_warranty" type="text" id="P_warranty" class="form-control" placeholder="Enter duration"> </div>

                                                </div>

                                                <!--/span-->
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Condition</label>
                                                        <input name="P_condition" type="text" id="P_condition" class="form-control" placeholder="Describe condition"> </div>
                                                </div>
                                            </div>


                                            <div class="row">

                                                <!--/span-->
                                                <div class="col-md-3">
                                                    <h5 class="card-title m-t-20">Upload Image</h5>
                                                    <div class="product-img"> <img src="../apassets/images/gallery/chair.jpg">
                                                        <div class="pro-img-overlay"><a href="javascript:void(0)" class="bg-info"><i class="ti-marker-alt"></i></a> <a href="javascript:void(0)" class="bg-danger"><i class="ti-trash"></i></a></div>
                                                        <br/>

                                                        <div class="form-group" >
                                                            {!! Form::label('photo_id','Photo:') !!}
                                                            {!! Form::file('photo_id',null,['class'=>'form-control']) !!}

                                                        </div>


                                                    </div>

                                                </div>

                                                {{-- uploading the image--}}


                                            </div>


                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float:left;" >Product Description</label>
                                                        <textarea name="P_description" id="P_description" class="form-control" rows="4">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="row">
                                                <div class="col-md-12 ">
                                                    <div class="form-group">
                                                        <label class="control-label" style="float: left;" >Product Specification</label>
                                                        <textarea name="P_specification" id="P_specification" class="form-control" rows="4">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/row-->
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="P_status" class="control-label">Status</label>
                                                        <select name="P_status" class="form-control" >
                                                            <option value="">Select status</option>
                                                            <option value="1">Active</option>
                                                            <option value="0">InActive</option>

                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="form-actions m-t-40">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i>Submit</button>
                                            <button type="button" class="btn btn-dark" data-dismiss="modal" >Cancel</button>
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->

                        </div>

                    </div>
                </div>
            </div>

            {{--show product modal--}}
            <div class="modal fade" id="viewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
                <div class="modal-dialog" style="max-width: 1200px;" role="document">
                    <div class="modal-content"  >
                        <div class="modal-header">
                            <h4 class="modal-title" id="exampleModalLabel1"></h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="modal-body">

                            <!-- Column -->
                            <div class="col-lg-12">
                                <div class="card">
                                    <div data-brackets-id="603" class="card-body">
                                        <h3 data-brackets-id="604" class="vpname" ></h3>
                                        <h6 data-brackets-id="605" class="card-subtitle">globe type chair for rest</h6>
                                        <div data-brackets-id="606" class="row">
                                            <div data-brackets-id="607" class="col-lg-3 col-md-3 col-sm-6">
                                                <div data-brackets-id="608" class="white-box text-center"> <img data-brackets-id="609" src="../apassets/images/gallery/chair.jpg" class="img-responsive"> </div>
                                            </div>
                                            <div data-brackets-id="610" class="col-lg-9 col-md-9 col-sm-6">
                                                <h4 data-brackets-id="611" class="box-title m-t-40">Product description</h4>
                                                <p data-brackets-id="612">Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. but the majority have suffered alteration in some form, by injected humour</p>
                                                <h2 data-brackets-id="613" class="m-t-40">$153 <small data-brackets-id="614" class="text-success">(36% off)</small></h2>
                                                <h3 data-brackets-id="618" class="box-title m-t-40">Key Highlights</h3>
                                                <ul data-brackets-id="619" class="list-unstyled">
                                                    <li data-brackets-id="620"><i data-brackets-id="621" class="fa fa-check text-success"></i> Sturdy structure</li>
                                                    <li data-brackets-id="622"><i data-brackets-id="623" class="fa fa-check text-success"></i> Designed to foster easy portability</li>
                                                    <li data-brackets-id="624"><i data-brackets-id="625" class="fa fa-check text-success"></i> Perfect furniture to flaunt your wonderful collectibles</li>
                                                </ul>
                                            </div>
                                            <div data-brackets-id="626" class="col-lg-12 col-md-12 col-sm-12">
                                                <h3 data-brackets-id="627" class="box-title m-t-40">General Info</h3>
                                                <div data-brackets-id="628" class="table-responsive">
                                                    <table data-brackets-id="629" class="table">
                                                        <tbody data-brackets-id="630">
                                                        <tr data-brackets-id="631">
                                                            <td data-brackets-id="632" width="390">Brand</td>
                                                            <td data-brackets-id="633"> Stellar </td>
                                                        </tr>
                                                        <tr data-brackets-id="634">
                                                            <td data-brackets-id="635">Delivery Condition</td>
                                                            <td data-brackets-id="636"> Knock Down </td>
                                                        </tr>
                                                        <tr data-brackets-id="637">
                                                            <td data-brackets-id="638">Seat Lock Included</td>
                                                            <td data-brackets-id="639"> Yes </td>
                                                        </tr>
                                                        <tr data-brackets-id="640">
                                                            <td data-brackets-id="641">Type</td>
                                                            <td data-brackets-id="642"> Office Chair </td>
                                                        </tr>
                                                        <tr data-brackets-id="643">
                                                            <td data-brackets-id="644">Style</td>
                                                            <td data-brackets-id="645"> Contemporary &amp; Modern </td>
                                                        </tr>
                                                        <tr data-brackets-id="646">
                                                            <td data-brackets-id="647">Wheels Included</td>
                                                            <td data-brackets-id="648"> Yes </td>
                                                        </tr>
                                                        <tr data-brackets-id="649">
                                                            <td data-brackets-id="650">Upholstery Included</td>
                                                            <td data-brackets-id="651"> Yes </td>
                                                        </tr>
                                                        <tr data-brackets-id="652">
                                                            <td data-brackets-id="653">Upholstery Type</td>
                                                            <td data-brackets-id="654"> Cushion </td>
                                                        </tr>
                                                        <tr data-brackets-id="655">
                                                            <td data-brackets-id="656">Head Support</td>
                                                            <td data-brackets-id="657"> No </td>
                                                        </tr>
                                                        <tr data-brackets-id="658">
                                                            <td data-brackets-id="659">Suitable For</td>
                                                            <td data-brackets-id="660"> Study &amp; Home Office </td>
                                                        </tr>
                                                        <tr data-brackets-id="661">
                                                            <td data-brackets-id="662">Adjustable Height</td>
                                                            <td data-brackets-id="663"> Yes </td>
                                                        </tr>
                                                        <tr data-brackets-id="664">
                                                            <td data-brackets-id="665">Model Number</td>
                                                            <td data-brackets-id="666"> F01020701-00HT744A06 </td>
                                                        </tr>
                                                        <tr data-brackets-id="667">
                                                            <td data-brackets-id="668">Armrest Included</td>
                                                            <td data-brackets-id="669"> Yes </td>
                                                        </tr>
                                                        <tr data-brackets-id="670">
                                                            <td data-brackets-id="671">Care Instructions</td>
                                                            <td data-brackets-id="672"> Handle With Care, Keep In Dry Place, Do Not Apply Any Chemical For Cleaning. </td>
                                                        </tr>
                                                        <tr data-brackets-id="673">
                                                            <td data-brackets-id="674">Finish Type</td>
                                                            <td data-brackets-id="675"> Matte </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Column -->

                        </div>

                    </div>
                </div>
            </div>



            <!-- .right-sidebar -->
            <div class="right-sidebar">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme working">1</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="../apassets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../apassets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../apassets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../apassets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../apassets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../apassets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../apassets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../apassets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Page wrapper  -->
    <script>
        $(document).ready(function(){
            $("#costprice").on('keyup change',function(){

                var t =  $("#costtax :selected").text();
                var c =   $(this).val();

                var result = parseFloat(c)+parseFloat(t);
                $(".final").val(result);
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            $("#costtax").on('keyup change',function(){

                var t =  $("#costtax :selected").text();
                var c =  $("#costprice").val();

                var result = parseFloat(c)+parseFloat(t);
                $("#final").val(result);
            });

        });
    </script>
    <!-- ======================================================== -->
    <!-- =======================for retail price calculation======================================= -->
    <script>
        $(document).ready(function(){
            $("#retailprice").on('keyup change',function(){

                var t =  $("#retailtax :selected").text();
                var c =  $("#retailprice").val();

                var result = parseFloat(c)+parseFloat(t);
                $("#finalretailprice").val(result);
            });

        });
    </script>

    <script>
        $(document).ready(function(){
            $("#retailtax").on('keyup change',function(){

                var t =  $("#retailtax :selected").text();
                var c =  $("#retailprice").val();
                var k = $("#discount").val();

                var temp =  parseFloat(c)-((parseFloat(c)*parseFloat(k))/100);

                var result = temp-((temp*parseFloat(t))/100);

                $("#finalretailprice").val(result);
            });

        });
    </script>
    <!-- ======================================================== -->
    <!-- =========================for category and subcategoyr===================================== -->
    <script type="text/javascript">

        jQuery(document).ready(function ()
        {
            jQuery('select[name="Category"]').on('change',function(){
                var CategoryID = jQuery(this).val();
                if(CategoryID)
                {
                    jQuery.ajax({
                        url : 'subcategory/getsubcategories/'+CategoryID,
                        type : "GET",
                        dataType : "json",
                        success:function(data)
                        {
                            console.log(data);
                            jQuery('select[name="subcategory_id"]').empty();
                            jQuery.each(data, function(key,value){
                                $('select[name="subcategory_id"]').append('<option value="'+ key +'">'+ value +'</option>');
                            });
                        }
                    });
                }
                else
                {
                    $('select[name="subcategory_id"]').empty();
                }
            });
        });
    </script>

    <script type="text/javascript">

        jQuery(document).ready(function ()
        {
            jQuery('#productdelete').on('click',function(){

                    jQuery.ajax({
                        url : '/products/1',
                        type : "DELETE",
                        dataType: "JSON",

                    });
            });
        });
    </script>

    <script type="text/javascript" >

            jQuery(document).ready(function(){
                $('.edit-modal').on('click',function() {
                    $('#editmodal').modal('show');
                    $('.modal-title').text('Post Edit');
                  $('#Pname').val($(this).data('name'));
                  $('#P_description').val($(this).data('description'));
                  $('#P_specification').val($(this).data('specification'));
                  $('#P_warranty').val($(this).data('warranty'));
                  $('#P_expiry_date').val($(this).data('expirydate'));
                  $('#P_manufacture_date').val($(this).data('manufacturedate'));
                  $('#P_quantity').val($(this).data('quantity'));
                  $('#P_condition').val($(this).data('condition'));
                  $('').val($(this).data('discountid'));
                  $().val($(this).data('subcategoryid'));
                });
            });
    </script>
    <script type="text/javascript" >

        jQuery(document).ready(function(){
            $('.view-modal').on('click',function() {
                $('#viewmodal').modal('show');
                $('.modal-title').text('Product Details');
                $('.vpname').text($(this).data('name'));

               /* $('#Pname').val($(this).data('name'));
                $('#P_description').val($(this).data('description'));
                $('#P_specification').val($(this).data('specification'));
                $('#P_warranty').val($(this).data('warranty'));
                $('#P_expiry_date').val($(this).data('expirydate'));
                $('#P_manufacture_date').val($(this).data('manufacturedate'));
                $('#P_quantity').val($(this).data('quantity'));
                $('#P_condition').val($(this).data('condition'));
                $('').val($(this).data('discountid'));
                $().val($(this).data('subcategoryid'));*/
            });
        });
    </script>

    @endsection

