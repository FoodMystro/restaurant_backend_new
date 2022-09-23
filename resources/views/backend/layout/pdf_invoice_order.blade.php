<!DOCTYPE html>
<html>
<head>
    <title>Larave Generate Invoice PDF - Nicesnippest.com</title>
</head>
<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
    }
    .m-0{
        margin: 0px;
    }
    .p-0{
        padding: 0px;
    }
    .pt-5{
        padding-top:5px;
    }
    .mt-10{
        margin-top:10px;
    }
    .text-center{
        text-align:center !important;
    }
    .w-100{
        width: 100%;
    }
    .w-50{
        width:50%;   
    }
    .w-85{
        width:85%;   
    }
    .w-15{
        width:15%;   
    }
    .logo img{
        width:45px;
        height:45px;
        padding-top:30px;
    }
    .logo span{
        margin-left:8px;
        top:19px;
        position: absolute;
        font-weight: bold;
        font-size:25px;
    }
    .gray-color{
        color:#5D5D5D;
    }
    .text-bold{
        font-weight: bold;
    }
    .border{
        border:1px solid black;
    }
    table tr,th,td{
        border: 1px solid #d2d2d2;
        border-collapse:collapse;
        padding:7px 8px;
    }
    table tr th{
        background: #F4F4F4;
        font-size:15px;
    }
    table tr td{
        font-size:13px;
    }
    table{
        border-collapse:collapse;
    }
    .box-text p{
        line-height:10px;
    }
    .float-left{
        float:left;
    }
    .total-part{
        font-size:16px;
        line-height:12px;
    }
    .total-right p{
        padding-right:20px;
    }
</style>
<body>
    <div class="head-title">
        <h1 class="text-center m-0 p-0">Invoice</h1>
    </div>
    <div class="add-detail mt-10">
        <div class="w-50 float-left mt-10">
            <p class="m-0 pt-5 text-bold w-100">Invoice Id - <span class="gray-color">#{{ $order->id }}</span></p>
            <p class="m-0 pt-5 text-bold w-100">Order Id - <span class="gray-color">{{ $order->unique_code }}</span></p>
            <p class="m-0 pt-5 text-bold w-100">Order Date - <span class="gray-color">{{ $order->created_at }}</span></p>
            <p class="m-0 pt-5 text-bold w-100">Order Service Type - <span class="gray-color">{{ $order->type }}</span></p>
        </div>
        <div class="w-15 float-left logo mt-10">
            {{-- <img src="https://www.nicesnippets.com/image/imgpsh_fullsize.png">  --}}
            {{-- <text>https://softsuitetech.com/DEMO/Restaurant_Backend/public/</text>      --}}
        </div>
        <div style="clear: both;"></div>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">From</th>
                <th class="w-50">To</th>
            </tr>
            <tr>
                <td>
                    
                    <div class="box-text">
                        <p>Name: {{ auth()->user()->name }}</p>
                        <p>Email: {{ auth()->user()->email }}</p>
                        <p>Phone: {{ auth()->user()->telephone }}</p>
                        <p>Address: {{ auth()->user()->Personal_info }}</p>
                        
                    </div>
                </td>
                <td>
                    <div class="box-text">
                        <p>Customer Name: {{ $order->ordered_user->name }}</p>
                        <p>Contact Details: {{ $order->ordered_user->phone }}-{{ $order->ordered_user->email }}</p>
                        <p>Delivery Address: {{ $order->ordered_user->address }}</p>
                        <p>Customer City: {{ $order->ordered_user->city }}</p>
                        
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">Payment Method</th>
                <th class="w-50">Shipping Method</th>
            </tr>
            <tr>
                <td>Cash On Delivery</td>
                <td>Free Shipping - Free Shipping</td>
            </tr>
        </table>
    </div>
    <div class="table-section bill-tbl w-100 mt-10">
        <table class="table w-100 mt-10">
            <tr>
                <th class="w-50">Item ID</th>
                <th class="w-50">Item Name</th>
                <th class="w-50">Price</th>
                <th class="w-50">Quantity</th>
                <th class="w-50">Subtotal</th>
                <th class="w-50">Tax Amount</th>
                <th class="w-50">Grand Total</th>
            </tr>
            
            @foreach ($order_details as $detail) 
        
            <tr align="center">
                <td>{{ $detail->id }}</td>
                <td>{{ $detail->items->name }}</td>
                <td>$ {{ $detail->price }}</td>
                <td>{{ $detail->qty }}</td>
                <td>$ {{ $detail->item_sub_total }}</td>
                <td>$ 0.00</td>
                <td>$ {{ $detail->items_grand_total }}</td>
            </tr>
            @endforeach
            <tr>
                <td colspan="7">
                    <div class="total-part">
                        <div class="total-left w-85 float-left" align="right">
                            <p>Sub Total</p>
                            <p>Discount/+ tax (0%)</p>
                            <p>Total Payable</p>
                        </div>
                        <div class="total-right w-15 float-left text-bold" align="right">
                            <p>$ {{ $order->sub_total }}</p>
                            @if($order->discount)
                            <p>$ {{ $order->discount }} @if($order->tax)/+{{ $order->tax }} @endif</p>
                            @else
                            <p>$ 0</p>
                            @endif
                            <p>$ {{ $order->grand_total }}</p>
                        </div>
                        <div style="clear: both;"></div>
                    </div> 
                </td>
            </tr>
        </table>
    </div>
</body>
</html>