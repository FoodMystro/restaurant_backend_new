@extends('backend.layout.master')
 
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Online Restaurant Ordering Platform">
    <meta name="author" content="Powered By FoodMystro">
    <title>Business Name - Restaurant Backend</title>
    <!-- Favicons-->
    <!-- <link rel="shortcut icon" href="img/favicon.svg" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png"> -->
    <!-- Bootstrap core CSS-->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- Main styles -->
    <!-- <link href="css/admin.css" rel="stylesheet"> -->
    <!-- Icon fonts-->
    <!-- <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <!-- Plugin styles -->
    <!-- <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet"> -->
    <!-- <link href="vendor/dropzone.css" rel="stylesheet"> -->
    <!-- <link href="css/date_picker.css" rel="stylesheet"> -->
    <!-- Your custom styles -->
    <!-- <link href="css/custom.css" rel="stylesheet"> -->
    <!-- WYSIWYG Editor -->
    <!-- <link rel="stylesheet" href="js/editor/summernote-bs4.css"> -->
</head>

<body class="fixed-nav sticky-footer" id="page-top">
    <!-- Navigation-->

    <!-- /Navigation-->
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Store Management</li>
            </ol>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-file"></i>Business information</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Business Name</label>
                            <input type="text" class="form-control" required placeholder="Enish Bar & Grill">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required placeholder="business@email.com">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Category</label>
                            <div class="styled-select">
                                <select>
                                    <option>Afro-Carribean</option>
                                    <option>Chinese</option>
                                    <option>Desserts</option>
                                    <option>Fast Food</option>
                                    <option>Halal</option>
                                    <option>Indian</option>
                                    <option>Kebab</option>
                                    <option>Mediterranean</option>
                                    <option>Pizza</option>
                                    <option>Turkish</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" class="form-control" placeholder="Keywords should be separated by commas">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group radio_c_group no_label">
                            <label>Available For:</label>
                            <label class="container_check">Delivery
                                <input type="checkbox" value="checkbox" name="delivery" checked="checked">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_check">Collection
                                <input type="checkbox" value="checkbox" name="collection">
                                <span class="checkmark"></span>
                            </label>
                            <label class="container_check">Table Service
                                <input type="checkbox" value="checkbox" name="table-service">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>About Us</label>
                            <div class="editor"></div>
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone No.</label>
                            <input type="text" class="form-control" required placeholder="+123 456 7890">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Website (Optional)</label>
                            <input type="url" class="form-control" placeholder="https://enishbargrill.co.uk">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Food Rating URL (Optional)</label>
                            <input type="url" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Facebook Page (Optional)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Twitter Page (Optional)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Instagram Page (Optional)</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <!-- <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Photos</label>
                            <form action="/file-upload" class="dropzone"></form>
                        </div>
                    </div>
                </div> -->
                <!-- /row-->
            </div>
            <!-- /box_general-->
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-map-marker"></i>Location</h2>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Select City</label>
                            <div class="styled-select">
                                <select>
                                    <option>Birmingham</option>
                                    <option>Manchester</option>
                                    <option>NewCastle</option>
                                    <option>London</option>
                                    <option>Scotland</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Address Line 1</label>
                            <input type="text" class="form-control" placeholder="ex. 250, Fifth Avenue...">
                        </div>
                    </div>
                </div>
                <!-- /row-->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>County</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Postcode</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- /row-->
            </div>
            <!-- /box_general-->
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-clock-o"></i>Opening Hours</h2>
                </div>
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'Delivery')">Delivery</button>
                    <button class="tablinks" onclick="openCity(event, 'Collection')">Collection</button>
                    <button class="tablinks" onclick="openCity(event, 'Table Service')">Table Service</button>
                </div>

                <div id="Delivery" class="tabcontent">
                        <h4>We provide delivery during our open hours (below).</h4>
                        <ul>
                            <li>We deliver to addresses within 5 miles of our store.</li>
                            <li>We deliver to addresses within the following postcodes SE1, SE2, SE3.</li>
                            <li>Our minimum spend for delivery is £10.00.</li>
                            <li>Our delivery charge is £2.50.</li>
                            <li>Free delivery when you spend at least £15.00.</li>
                            <li>A service charge of £2.50 is applied to all orders.</li>
                        </ul>
                        <h5>Delivery Hours</h5>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Monday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Tuesday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Wednesday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Thursday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Friday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Saturday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Sunday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                    </div>                    
                </div>

                <div id="Collection" class="tabcontent">
                    <h4>We allow collection during our open hours (below).</h4>
                    <ul>
                        <li>Our minimum spend for collection is £8.00.</li>
                        <li>A service charge of £2.50 is applied to all orders.</li>
                    </ul>
                    <h5>Collection Hours</h5>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Monday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Tuesday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Wednesday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Thursday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Friday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Saturday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                    
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Sunday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="Table Service" class="tabcontent">
                    <h4>We allow table ordering during our open hours (below).</h4>
                    <ul>
                        <li>Our minimum spend for table ordering is £2.50.</li>
                        <li>A service charge of £1.00 is applied to all orders.</li>
                    </ul>
                    <h5>Table Service Hours</h5>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Monday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Tuesday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Wednesday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /row-->
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Thursday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Friday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Saturday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-2">
                            <label class="fix_spacing">Sunday</label>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Opening Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="styled-select">
                                    <select>
                                        <option>Closing Time</option>
                                        <option>Closed</option>
                                        <option>1 AM</option>
                                        <option>2 AM</option>
                                        <option>3 AM</option>
                                        <option>4 AM</option>
                                        <option>5 AM</option>
                                        <option>6 AM</option>
                                        <option>7 AM</option>
                                        <option>8 AM</option>
                                        <option>9 AM</option>
                                        <option>10 AM</option>
                                        <option>11 AM</option>
                                        <option>12 AM</option>
                                        <option>1 PM</option>
                                        <option>2 PM</option>
                                        <option>3 PM</option>
                                        <option>4 PM</option>
                                        <option>5 PM</option>
                                        <option>6 PM</option>
                                        <option>7 PM</option>
                                        <option>8 PM</option>
                                        <option>9 PM</option>
                                        <option>10 PM</option>
                                        <option>11 PM</option>
                                        <option>12 PM</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- /row-->
            </div>
            <!-- /box_general-->

            <!-- /.container-wrapper-->
            <p><a href="#0" class="btn_1 medium">Save</a> 
                <!-- <a href="#0" class="btn_1 medium gray">Add another item</a> -->
            </p>
            <footer class="sticky-footer">
                <div class="container">
                    <div class="text-center">
                        <small>Copyright © Business Name | Powered by FoodMystro</small>
                    </div>
                </div>
            </footer>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fa fa-angle-up"></i>
            </a>
            
            <!-- Logout Modal-->
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

            <!-- Bootstrap core JavaScript-->
            <!-- <script src="vendor/jquery/jquery.min.js"></script> -->
            <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
            <!-- Core plugin JavaScript-->
            <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->
            <!-- Page level plugin JavaScript-->
            <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->
            <!-- <script src="vendor/datatables/jquery.dataTables.js"></script> -->
            <!-- <script src="vendor/datatables/dataTables.bootstrap4.js"></script> -->
            <!-- <script src="vendor/jquery.magnific-popup.min.js"></script> -->
            <!-- Custom scripts for all pages-->
            <!-- <script src="js/admin.js"></script> -->
            <!-- Custom scripts for this page-->
            <!-- <script src="vendor/dropzone.min.js"></script> -->
            <!-- <script src="vendor/bootstrap-datepicker.js"></script> -->
            <!-- <script>
            $('input.date-pick').datepicker();
            </script> -->
            <!-- WYSIWYG Editor -->
            <!-- <script src="js/editor/summernote-bs4.min.js"></script> -->
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

            <script>
                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            </script>
        </body>
</html>
@endsection