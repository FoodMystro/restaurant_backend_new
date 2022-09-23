@extends('backend.layout.master')
@section('content')



<body class="fixed-nav sticky-footer" id="page-top">

    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Edit Order</li>
            </ol>
            <div class="box_general pb-3">
                
                <div class="header_box">
                    <h2 class="d-inline-block"><span>Edit Order  </span></h2>
                </div>
                <div class="list_general order">
                    <ul>
                        <li>
                            <figure><img src="{{asset('')}}admin-assets/img/item_1.jpg" alt=""></figure>
                            <h4>{{ $order->type }} Order<i class="approved">{{ $order->status }}</i></h4>
                            <ul class="booking_list">
                                <li><strong>Order ID:</strong> {{ $order->unique_code }}</li>
                                <li><strong>Order Date & Time:</strong> {{ $order->created_at }}</li>
                                <li><strong>Order Service Type:</strong> Delivery</li>
                                <br>
                                <li><strong>Customer Name:</strong> {{ $order->ordered_user->name }}</li>
                                {{-- <li><strong>Order Time:</strong> 08.30pm</li> --}}
                                <li><strong>Delivery Address:</strong> {{ $order->ordered_user->address }}</li>
                                <li><strong>Contact Details:</strong> <a href="#0">{{ $order->ordered_user->phone }}</a> - <a href="#0">{{ $order->ordered_user->email }}</a></li>
                                {{-- <li><strong>Payment Type:</strong> Credit Card</li> --}}
                                <br>
                                {{-- <li><strong>Courier ID</strong> D00004</li> --}}
                                {{-- <li><strong>Courier Name</strong> Johnny Rey</li> --}}
                            </ul>
                            <div class="row">
                                <!--<div class="col-md-4">-->
                                <!--    <a href="#0" class="btn_1" data-toggle="modal" data-target="#client_detail_modal">-->
                                <!--        <i class="fa fa-fw fa-pencil"></i> Edit Order Detail</a>-->
                                <!--</div>-->
                                <div class="col-md-4">
                                     <form method="POST" action="{{route('update_order_status')}}">
                                        @csrf
                                        <input type="hidden" name="status" value="Pending"/>
                                        <input type="hidden" name="order_id" value="{{$order->id}}"/>
                                    <button class="btn_1">
                                        <i class="fa fa-fw fa-save"></i> Update Order</button>
                                        </form>
                                    <!--<a href="{{ route('update_order_status_pending',$order->id) }}" class="btn_1"><i class="fa fa-fw fa-save"></i> Update Order</a>-->
                                </div>
                                <div class="col-md-4">
                                     <form method="POST" action="{{route('update_order_status')}}">
                                        @csrf
                                        <input type="hidden" name="status" value="Cancelled"/>
                                        <input type="hidden" name="order_id" value="{{$order->id}}"/>
                                    <button class="btn_1">
                                        <i class="fa fa-fw fa-close"></i> Cancel Order</button>
                                        </form>
                                    <!--<a href="{{ route('update_order_status_cancel',$order->id) }}" class="btn_1"><i class="fa fa-fw fa-close"></i> Cancel Order</a>-->
                                </div>
                            </div>
                            <ul class="buttons">
                                {{-- <li><a href="" class="btn_1 gray delete"><i class="fa fa-fw fa-close"></i> Cancel Order</a></li> --}}
                                {{-- <li><a href="" class="btn_1 gray delete"><i class="fa fa-fw fa-send"></i> Email Invoice</a></li> --}}
                                <li><a href="{{ route('print.invoice',$order->id) }}" class="btn_1 gray delete"><i class="fa fa-fw fa-print"></i> Print Invoice</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <hr>
                <h5>Order detail</h5>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Item ID</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                {{-- <th>Options</th> --}}
                                <th>Price</th>
                                <!--<th>Edit</th>-->
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Item ID</th>
                                <th>Item Name</th>
                                <th>Quantity</th>
                                {{-- <th>Options</th> --}}
                                <th>Price</th>
                                <!--<th>Edit</th>-->
                            </tr>
                        </tfoot>
                        <tbody>
                            {{-- <tr>
                                <td>45</td>
                                <td>Enchiladas</td>
                                <td>2</td>
                                <td>Extra Tomato, Extra Pepper</td>
                                <td><a href="#0" data-toggle="modal" data-target="#edit_item_order"><strong>Edit</strong></a> | <a href="#0"><strong>Delete</strong></a></td>
                                <td>$12</td>
                            </tr>--}}
                            @foreach ($order_details as $detail) 
                            <tr>
                                <td>{{ $detail->id }}</td>
                                <td>{{ $detail->items->name }}</td>
                                <td>{{ $detail->qty }}</td>
                                {{-- <td>-</td> --}}
                                <td>$ {{ $detail->price }}</td>
                                <!--<td><a href="#0" data-toggle="modal" data-target="#edit_item_order"><strong>Edit</strong></a> | <a href="#0"><strong>Delete</strong></a></td>-->
                            </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row justify-content-end total_order">
                    <div class="col-xl-3 col-lg-4 col-md-5">
                        <form method="POST" action="{{route('update_order_status')}}">
                    @csrf
                        <ul>
                            <li>
                                <span>Subtotal</span> $ {{ $order->sub_total }}
                            </li>
                            <li>
                                <span>Delivery Fee</span> $ 0.00
                            </li>
                            <li>
                                <span>Total</span> $ {{ $order->grand_total }}
                            </li>
                        </ul>
                        <input type="hidden" name="status" value="Processed"/>
                        <input type="hidden" name="order_id" value="{{$order->id}}"/>
                        <button  class="btn_1 full-width cart" style="width: 100%; text-align: center;">Process Order</button>
                        </form>
                    </div>
                </div>
                
                <!-- /total_order-->
            </div>
            <!-- /box_general-->
        </div>
        <!-- /container-fluid-->
    </div>
    <!-- /container-wrapper-->
   
    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="#0">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Order Detail Modal -->
    <div class="modal fade" id="client_detail_modal" tabindex="-1" role="dialog" aria-labelledby="client_detail_modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="client_detail_modalLabel">Edit order detail</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="Mark Twain">
                    </div>
                   <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" class="form-control date-pick" value="11/05/2020">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Time</label>
                                <div class="styled-select">
                                    <select>
                                        <option selected="">08.30pm</option>
                                        <option>08.45pm</option>
                                        <option>09.00pm</option>
                                        <option>09.15pm</option>
                                        <option>09.30pm</option>
                                        <option>09.45pm</option>
                                        <option>10.00pm</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" value="23 Barda Bonilla Lane">
                    </div>
                    <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" value="London">
                    </div>
                    <div class="form-group">
                        <label>Postcode</label>
                        <input type="text" class="form-control" value="ES2 5TY">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone No.</label>
                                <input type="text" class="form-control" value="98432983242">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" value="mark@hotmail.com">
                            </div>
                        </div>
                    </div>
                    <!-- /Row -->
                    <div class="form-group">
                        <label>Payment Method</label>
                        <div class="styled-select">
                            <select>
                                <option selected="">Debit Card</option>
                                <option>Credit Card</option>
                                <option>Cash On Delivery</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Service Type</label>
                        <div class="styled-select">
                            <select>
                                <option selected="">Delivery</option>
                                <option>Collection</option>
                                <option>Table Service</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="#0">Save</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Item Order Modal -->
    <div class="modal fade" id="edit_item_order" tabindex="-1" role="dialog" aria-labelledby="edit_item_orderLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="edit_item_orderLabel">Edit item order</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Quantity</label>
                        <div class="numbers-row">
                            <input type="text" value="2" id="qty_1" class="qty2 form-control" name="quantity">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Size</label>
                        <ul class="clearfix">
                            <li>
                                <label class="container_radio">Medium<span>+ $3.30</span>
                                    <input type="radio" value="option1" name="options_1" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="container_radio">Large<span>+ $5.30</span>
                                    <input type="radio" value="option2" name="options_1">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="container_radio">Extra Large<span>+ $8.30</span>
                                    <input type="radio" value="option3" name="options_1">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="form-group">
                        <label>Extra Ingredients</label>
                        <ul class="clearfix">
                            <li>
                                <label class="container_check">Extra Tomato<span>+ $4.30</span>
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="container_check">Extra Peppers<span>+ $2.50</span>
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                            <li>
                                <label class="container_check">Extra Ham<span>+ $4.30</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="#0">Save</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
   
</body>
@endsection