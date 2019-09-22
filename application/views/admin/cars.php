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