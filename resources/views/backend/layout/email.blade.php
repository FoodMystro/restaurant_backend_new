@extends('backend.layout.master')
@section('content')
<body class="fixed-nav sticky-footer" id="page-top">
    <!-- /Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
        
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Email Settings</li>
            </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Email Settings</i></h2>
                </div>
            <form action="{{route('update_email_settings',['id'=> $email ? $email->id : '0'])}}" method="post">
             @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>User Name</label>
                            <input type="text"  name="user_name" class="form-control" value="{{$email->user_name}}">
                            <div class="danger text-danger">{{$errors->first('user_name')}}</div>
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password"  name="password" class="form-control"  value="{{$email->password}}">
                            <div class="danger text-danger">{{$errors->first('password')}}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Server Address</label>
                            <input type="text"  name="server_address" class="form-control"  value="{{$email->server_address}}">
                            <div class="danger text-danger">{{$errors->first('server_address')}}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Port Number</label>
                            <input type="text"  name="port_no" class="form-control"  value="{{$email->port_no}}">
                            <div class="danger text-danger">{{$errors->first('port_no')}}</div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Server</label>
                            <select  class="form-control" name="server"  value="{{$email->server}}">
                            <option value="sellect server" disabled>Sellect Server</option>
                               <option {{$email->server == 1 ? 'selected' : ''}} value="1">SSL</option>
                               <option {{$email->server == 2 ? 'selected' : ''}} value="2">TSL</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success mt-3">Update</button>
      
        </form>        
                                    <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top"><i class="fa fa-angle-up"></i></a>

       
                
                                    <!-- Bootstrap core JavaScript-->
       
            <!-- <script>
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
           </script> -->
        </body>
@endsection