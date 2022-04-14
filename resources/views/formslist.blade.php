<!DOCTYPE html>
<html lang="en">

<head>
    <title>Telecom</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    
    @include('sidebar')

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light">
        
        
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                </li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>{{ session('name') }}</span>
                                <a href="{{ route('logout')}}" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-settings"></i> Settings</a></li>
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                                <li><a href="message.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
                                <li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->
                    <div class="page-header">
                        <div class="page-block">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <div class="page-header-title">
                                        <h5 class="m-b-10" id="formdetails" style="border: 2px solid;"></h5>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="row" style="height: 500px; overflow: auto;">
                                <div class="col-sm-12">
                                    <form method="POST" action="{{ route('saveform')}}">
                                        @csrf
                                    <div class="card">
                                        
                                        <div class="card-body">
                                            <h5>General Information</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    
                                                        <div class="form-group">
                                                            <label>Invoice No</label>
                                                            <input type="text" name="invoice_no" class="form-control"  placeholder="Enter Invoice No" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Invoice Date</label>
                                                            <input type="text" name="invoice_date" class="form-control"  placeholder="MM/DD/YYYY" required>
                                                        </div>
                                                    
                                                </div>
                                                <div class="col-md-6">
                                                                                                       
                                                    <div class="form-group">
                                                        <label>Customer Id</label>
                                                        <input type="text" name="customer_id" class="form-control" placeholder="Enter Customer Id" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Phone No</label>
                                                        <input type="text" name="phone_no" class="form-control" placeholder="Enter Phone No" required>
                                                    </div>
                                                    
                                                </div>
                                                

                                            </div>
                                        
                                        </div>
                                    </div>
                                    <!-- Input group -->
                                    <div class="card">
                                        
                                        <div class="card-body">
                                            <h5> Personal Details</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Customer Name</label>
                                                        <input type="text" name="cust_name" class="form-control" placeholder="Enter Customer Name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Customer Address</label>
                                                        <textarea class="form-control" name="cust_address" rows="3" required></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Customer City</label>
                                                        <input type="text" name="cust_city" class="form-control" placeholder="Enter Customer City" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Customer State</label>
                                                        <input type="text" name="cust_state" class="form-control" placeholder="Enter Customer State" required>
                                                    </div>   
                                                    
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Customer Zip</label>
                                                        <input type="text" name="cust_zip" class="form-control" placeholder="Enter Customet Zip" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Customer Email Id</label>
                                                        <input type="text" name="cust_email" class="form-control" placeholder="Enter Customer Email Id" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Customer DOB</label>
                                                        <input type="text" name="cust_dob" class="form-control" placeholder="MM/DD/YYYY" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Customer Alternate No</label>
                                                        <input type="text" name="cust_alt_no" class="form-control" placeholder="Enter Customer Alternate No" required> 
                                                    </div> 
                                                </div>
                                                

                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="card">
                                        
                                        <div class="card-body">
                                            <h5> Device Details</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Mobile Plane Name</label>
                                                        <input type="text" name="mobile_planname" class="form-control" placeholder="Enter Mobile Plane Name" required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Mobile Plane Code</label>
                                                        <input type="text" name="plane_code" class="form-control" placeholder="Enter Mobile Plan Code" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Validity</label>
                                                        <input type="text" name="validity" class="form-control" placeholder="Enter Validity" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>AddOn Service</label>
                                                        <input type="text" name="addon_services" class="form-control" placeholder="Enter Addon Service" required>
                                                    </div> 
                                                    
                                                    <div class="form-group">
                                                        <label>Mobile Device</label>
                                                        <input type="text" name="mobile_device" class="form-control" placeholder="Enter Mobile Device" required>
                                                    </div>
                                                    
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Dealer Company Name</label>
                                                        <input type="text" name="dealer_company_name" class="form-control" placeholder="Enter Dealer Company Name" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Dealer Name</label>
                                                        <input type="text" name="dealer_name" class="form-control" placeholder="Enter Dealer Name" required>
                                                    </div> 

                                                    
                                                    <div class="form-group">
                                                        <label> Dealer Company Address</label>
                                                        <textarea class="form-control" name="dealer_company_address" rows="3" required></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Dealer Company State</label>
                                                        <input type="text" name="dealer_company_state" class="form-control" placeholder="Enter Dealer Company State" required>
                                                    </div> 
                                                </div>
                                                

                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="card">
                                        
                                        <div class="card-body">
                                            <h5> Dealer & Retail Details</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Dealer Company City</label>
                                                        <input type="text" name="dealer_company_city" class="form-control" placeholder="Enter Dealer Company City" required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Dealer Company Zip</label>
                                                        <input type="text" name="dealer_company_zip" class="form-control" placeholder="Enter Dealer Company Zip" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Dealer Company Email</label>
                                                        <input type="text" name="dealer_company_email" class="form-control" placeholder="Dealer Company Email" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Dealer No</label>
                                                        <input type="text" name="dealer_no" class="form-control" placeholder="Enter Dealer No" required>
                                                    </div> 
                                                    
                                                    <div class="form-group">
                                                        <label>Dealer Code</label>
                                                        <input type="text" name="dealer_code" class="form-control" placeholder="Enter Dealer Code" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Retail Company Name</label>
                                                        <input type="text" name="retail_name" class="form-control" placeholder="Enter Retail Company Name" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label> Retail Company Address</label>
                                                        <textarea class="form-control" name="retail_address" rows="3" required></textarea>
                                                    </div>
                                                    
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Retail Company State</label>
                                                        <input type="text" name="retail_state" class="form-control" placeholder="Retail Company State" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Retail Company City</label>
                                                        <input type="text" name="retail_city" class="form-control" placeholder="Enter Retail Company City" required>
                                                    </div> 

                                                    
                                                    <div class="form-group">
                                                        <label>Retail Company Zip</label>
                                                        <input type="text" name="retail_zip" class="form-control" placeholder="Enter Retail Company Zip" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Retail Company Email</label>
                                                        <input type="text" name="retail_email" class="form-control" placeholder="Enter Company Email" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Retail No</label>
                                                        <input type="text" name="retail_no" class="form-control" placeholder="Enter Retail No" required>
                                                    </div> 

                                                    
                                                    <div class="form-group">
                                                        <label>Retail Code</label>
                                                        <input type="text" name="retail_code" class="form-control" placeholder="Enter Retail Code" required>
                                                    </div> 
                                                </div>
                                                

                                            </div>
                                        
                                        </div>
                                    </div>
                                    <div class="card">
                                        
                                        <div class="card-body">
                                            <h5> Payment Details</h5>
                                            <hr>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Payment</label>
                                                        <input type="text" name="payment" class="form-control" placeholder="Enter Payment" required>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label>Discount</label>
                                                        <input type="text" name="discount" class="form-control" placeholder="Enter Discount" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Coupon Code</label>
                                                        <input type="text" name="coupon_code" class="form-control" placeholder="Enter Coupon Code" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Payment Type</label>
                                                        <input type="text" name="payment_type" class="form-control" placeholder="Enter Payment Type" required>
                                                    </div> 
                                                    
                                                    <div class="form-group">
                                                        <label>Card Type</label>
                                                        <select class="form-control" name="card_type">
                                                            <option>Select Card</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>

                                                    
                                                    
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Total Payment</label>
                                                        <input type="text" name="total_payment" class="form-control" placeholder="Enter Total Payment" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Reference No</label>
                                                        <input type="text" name="reference_no" class="form-control" placeholder="Enter Reference No" required>
                                                    </div> 

                                                    
                                                    <div class="form-group">
                                                        <label>Transaction Id</label>
                                                        <input type="text" name="transaction_id" class="form-control" placeholder="Enter Transaction Id" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label>Rating</label>
                                                        <input type="text" name="rating" class="form-control" placeholder="Enter Rating" required>
                                                    </div> 

                                                    <div class="form-group">
                                                        <label> Remark</label>
                                                        <textarea class="form-control" name="remark" rows="3" required></textarea>
                                                    </div>

                                                    
                                                </div>
                                                
                                                <button type="submit" class="btn btn-primary" name="save">Save</button>

                                            </div>
                                        
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                            <!-- [ Main Content ] end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('assets/js/vendor-all.min.js') }}"></script>
	<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.min.js') }}"></script>

</body>
</html>
