<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin side</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=5ff8ca2121314e3b805fc8fdbe513705">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/breadcrumb.css?h=eca7075e56a73a3612905c6d8191324f">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css?h=c942239c91f94a6b90d67fb2496c21bf">
    <link rel="stylesheet" href="assets/css/Data-Table-1.css?h=71f79ecfb6de2ac09d4f4c6f4b749319">
    <link rel="stylesheet" href="assets/css/Data-Table.css?h=71f79ecfb6de2ac09d4f4c6f4b749319">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/modal.css?h=98f5b320d079585e0074f2a278aed8fd">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css?h=3d359cf00afe1d7b8d5c5d8e7cba9844">
    <link rel="stylesheet" href="assets/css/Panel-Body.css?h=20c065d46cd1fea8ebe3e85eb1f924b5">
    <link rel="stylesheet" href="assets/css/Panel.css?h=8c2b63a5491790d9f517499a1b9d0cc5">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css?h=adf8fd0aa4cdf75c6dfc78989ffd7748">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css?h=70e12aa61bd6652a1b6ca0664ec38c0d">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css?h=604cb4e2e523f88e3270d5f1dbcb81fa">
</head> -->

<body>
    <!-- <div>
        <nav class="navbar navbar-light navbar-expand-md">
            <div class="container-fluid"><a class="navbar-brand" href="#"><strong>ZC Car Rental</strong></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div
                    class="collapse navbar-collapse" id="navcol-2">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Notifications<span class="badge badge-primary">00</span></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Admin</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Settings</a><a class="dropdown-item" role="presentation" href="#">Log Out</a></div>
                        </li>
                    </ul>
            </div>
    </div>
    </nav>
    </div> -->
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"> <a href="index.html">Home </a></li>
                <li> <a class="list-group-item focus" href="index.html">DASHBOARD</a></li>
                <li> <a class="list-group-item focus" href="#">RENT</a></li>
                <li> <a class="list-group-item focus" href="reservation.html">RESERVATION</a><a class="list-group-item focus"href="return.html">RETURN CAR</a><a href="cars.html" class="list-group-item active">CARS</a><a href="customer.html" class="list-group-item focus">CUSTOMER</a><a href="employee.html" class="list-group-item  focus">EMPLOYEE</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div class="container-fluid"><a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a><header>
    <h3> CARS </h3>
    <div class="form-group">
    <i class="fa fa-search"></i><label for="search-field"></label>
        <input type="search" /> 
    </div>
</header><div class="table-responsive">
    <table class="table table-bordered" id="">
        <thead>
            <tr>
                <th>Car ID</th>
                <th>Owner Name</th>
                 <th>Picture</th>
                <th>Model</th>
                <th>Brand</th>
                 <th>Color</th>
                <th>Type</th>
                <th>Seats</th>
                <th>Plate No.</th>
                <th>Transmission</th>
                <th>Fuel Capacity</th>
                <th>Gas Type</th>
                 <th>Insurance</th>
                 <th>Driver</th>
                 <th>Price Rate</th>
                 <th>Options</th>
            </tr>
        </thead>
       
    </table>
</div><button class="modal-open pull pull-right" data-modal="addcar">Add New</button>


<!-- add car -->
<div class="modal" id="addcar">
    <div class="modal-content">
        <div class="modal-header">
                Add Car
            <button class="close modal-close" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div>
            <div class="modal-body">
                <div class = "container">
  <div class="row">
    <!--breadcrumbs-->
      <div class="wrapper">
        <ul>
            <li class="active">
            <a href="#">
                <i class="fa fa-pencil-square-o icon"></i>
                <p>Fill</p>
            </a>
        </li>
        <li>
            <a href="#">
            <i class="fa fa-camera-retro icon"></i>
                <p>Add Pictures</p>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-check-square-o icon"></i>
                <p>Finalize</p>
            </a>
        </li>
        </ul>             
    </div>
    <!--breadcrumbs-->
                    </div>             
                    
                    <div class="row">
    <!-- left part -->
        <div class="col-sm-6">
            
          <div class="form-group">
            
            <input type="text" class="form-control" id="" name="" >
              <label for="">Car Owner * </label>
         </div><hr/>
          
         <div class="form-group">
            
            <input type="text" class="form-control" id="" name="" >
             <label for="">Model * </label>
        </div>  
             
        <div class="form-group">
           
            <input type="text" class="form-control" id="" name="" >
             <label for="">Brand * </label>
        </div>    
            
        <div class="form-group">
           
            <input type="text" class="form-control" id="" name="" >
             <label for="">Type * </label>
        </div>  
            
         <div class="form-group">
           
            <input type="text" class="form-control" id="" name="" >
             <label for="">Seats * </label>
        </div>  
            
             <div class="form-group">
           
            <input type="text" class="form-control" id="" name="" >
             <label for="">Color * </label>
        </div>  
            
             <div class="form-group">
           
            <input type="text" class="form-control" id="" name="" >
             <label for="">Plate Number * </label>
        </div>  
            
</div>
                    
    <!-- left part -->
                        
    <!--right part -->
        <div class="col-sm-6">                    
        </div>
    <!--right part -->
        </div>
        </div>
        </div> 
        <div class="modal-footer">
            <button class="link modal-close"> Close</button>
            <button class="modal-open"  data-modal="Next" > Proceed</button>
        </div>
    </div>
</div>
<script src="modal.js"></script>
<script src="label.js"></script>
<!-- trials -->
<div class="modal" id="Next">
    <div class="modal-content">
        <div class="modal-header">
        Add Car
            <button class="close modal-close" aria-label="close"><span aria-hidden="true">&times;</span></button>
        </div>
            <div class="modal-body">
                <div class = "container">
  <div class="row">
    <!--breadcrumbs-->
      <div class="wrapper">
        <ul>
            <li >
            <a href="#">
                <i class="fa fa-pencil-square-o icon"></i>
                <p>Fill</p>
            </a>
        </li>
        <li class="active">
            <a href="#">
            <i class="fa fa-camera-retro icon"></i>
                <p>Add Pictures</p>
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-check-square-o icon"></i>
                <p>Finalize</p>
            </a>
        </li>
        </ul>             
    </div>
    <!--breadcrumbs-->
                    </div>             
                    
                    <div class="row">
    <!-- left part -->
        <div class="col-sm-6">
          
            
          </div>
                    
    <!-- left part -->
                        
                        <!--right part -->
                         <div class="col-sm-6">
                             
                        </div>
                        <!--right part -->
        </div>
        </div>
        </div>
      <div class="modal-footer">
            <button class="link modal-close"> Close</button>
            <button class="modal-open" data-modal="Next"> Proceed</button>
        </div>
    </div>
</div>      

<!-- Add  Car -->
<!--    <div class="modal fade" tabindex="-1"  id="addCar">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title"><font color="black">Add Car </font></h5>
        <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <ol class="breadcrumb">
            <li><a href="#" class="active">Fill in the car information</a></li>
            <li><a href="#">Upload Pictures</a></li>
             <li><a href="#">Review</a></li>
            
        </ol>
      </div>
      <div class="modal-footer">
          <a href="#" class="modal-close"> close</a>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
     /add car --> 
</div>
        </div>
    </div>
    <script src="assets/js/jquery.min.js?h=1dd785e1de9a32e236b624ae268bb803"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=2394c9ffd5558f411ffdc3326e9a8962"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/label.js?h=0597ac31c002d7ed04b09b4f4d0104ca"></script>
    <script src="assets/js/modal.js?h=106753b11d10f7ee179d9c47f414662d"></script>
    <script src="assets/js/Sidebar-Menu.js?h=799b9a88f11384c3d5b19774a5e8d1ed"></script>
    <script src="assets/js/Table-With-Search.js?h=aeb9a0ac8b6cc9ec2e3b9cc3add2f239"></script>
</body>

</html>