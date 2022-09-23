@extends('backend.layout.master')
@section('content')
<!DOCTYPE html>
<html lang="en">

<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->
   
    <!-- /Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <form action="{{ route('update_payment',['id'=> ($payment ? $payment->id : '0')])}}" method="post">
               
                @csrf
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Payment Merchant</li>
            </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Delivery</i></h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Online Payment</label>
                            <div class="styled-select">
                                <select name="delivery_Online_Payment">
                                    <option value="1" {{ ($payment->delivery_Online_Payment) == '1' ? 'selected' : '' }} >Yes</option>
                                    <option value="0" {{ ($payment->delivery_Online_Payment) == '0' ? 'selected' : '' }} >No</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cash on Delivery</label>
                            <div class="styled-select">
                                <select name="delivery_COD">
                                    <option value="1" {{ ($payment->delivery_COD) == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ ($payment->delivery_COD) == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /box_general-->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Table Service</i></h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Online Payment</label>
                            <div class="styled-select">
                                <select name="table_service_online_payment">
                                    <option value="1" {{ ($payment->table_service_online_payment) == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ ($payment->table_service_online_payment) == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cash on Delivery</label>
                            <div class="styled-select">
                                <select name="table_service_COD">
                                    <option value="1" {{ ($payment->table_service_COD) == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ ($payment->table_service_COD) == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /box_general-->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Collection</i></h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Online Payment</label>
                            <div class="styled-select">
                                <select name="collection_online_payment">
                                    <option value="1" {{ ($payment->collection_online_payment) == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ ($payment->collection_online_payment) == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Cash on Delivery</label>
                            <div class="styled-select">
                                <select name="collection_COD">
                                    <option value="1" {{ ($payment->collection_COD) == '1' ? 'selected' : '' }}>Yes</option>
                                    <option value="0" {{ ($payment->collection_COD) == '0' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /box_general-->

            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Currency Settings</i></h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Default Currency</label>
                            <div class="styled-select">
                                <select name="default_currency">
                                    <option value="1" {{ ($payment->default_currency) == '1' ? 'selected' : '' }}>(£ GBP) Pounds</option>
                                    <option value="2" {{ ($payment->default_currency) == '2' ? 'selected' : '' }}>($ USD) Dollars</option>
                                    <option value="3" {{ ($payment->default_currency) == '3' ? 'selected' : '' }}>(€ EUR) Euros</option>
                                </select>
                            </div>
                        </div>
                    </div>
            
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Stripe API Key</label>
                            <input type="text" class="form-control" placeholder="eg. 1234456SCVGBNXW£$%^GTYTT" name="Stripe_api_Key" value="{{$payment->Stripe_api_Key}}" required >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Secret Key</label>
                            <input type="text" class="form-control" placeholder="eg. 1234456SCVGBNXW£$%^GTYTT" name="secret_key" value="{{$payment->secret_key}}" required>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /box_general-->

            <!-- /.container-wrapper-->
            <!-- <button class="btn bt-danger" type="submit">update</button> -->
            <button class="btn btn-primary">update</button>
                <!-- <a href="#0" class="btn_1 medium gray">Add another Category</a> -->
    </form>
            <!-- <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Business Name | Powered by FoodMystro</small>
                    </div>
                </div>
            </footer> -->
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            
            <!-- Logout Modal-->
            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
            </div> -->

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
            <!-- Page level plugin JavaScript-->
            <script src="vendor/chart.js/Chart.min.js"></script>
            <script src="vendor/datatables/jquery.dataTables.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
            <script src="vendor/jquery.magnific-popup.min.js"></script>
            <!-- Custom scripts for all pages-->
            <script src="js/admin.js"></script>
            <!-- Custom scripts for this page-->
            <script src="vendor/dropzone.min.js"></script>
            <script src="vendor/bootstrap-datepicker.js"></script>
            <script>
            $('input.date-pick').datepicker();
            </script>
            <!-- WYSIWYG Editor -->
            <script src="js/editor/summernote-bs4.min.js"></script>
            <script>
            $('.editor').summernote({
                fontSizes: ['10', '14'],
                toolbar: [
                    // [groupName, [list of button]]
                    ['style', ['bold', 'italic', 'underline', 'clear']],
                    ['font', ['strikethrough']],
                    ['fontsize', ['fontsize']],
                    ['para', ['ul', 'ol', 'paragraph']]
                ],
                placeholder: 'Write here ....',
                tabsize: 2,
                height: 200
            });
            </script>
</body>

</html>
@endsection