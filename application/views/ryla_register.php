<!DOCTYPE html>
<html lang="en">
<br><br><br>
<body>

   
<div class="page-body">

<!-- Container-fluid start -->
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-header-left">
                    <h3>Registeration
                        <small>Ryla member Registeration</small>
                    </h3>
                </div>
            </div>
            <div class="col-sm-6">

                <!-- Breadcrumb start -->
                <ol class="breadcrumb pull-right">
                    <li class="breadcrumb-item">
                        <a href="index.html">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Manage users</li>
                </ol>
                <!-- Breadcrumb end -->
                
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid end -->

<!-- Container-fluid start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-10">
            <div class="card"> 
                <div class="card-header pb-0">
                    <h5>Add user details</h5>
                </div>
                 <div class="card-body admin-form">
                    <form class="row gx-3">
                        <div class="form-group col-md-4 col-sm-6">
                            <label>First name <span class="font-danger">*</span></label>
                            <input type="text" id ="fname"  class="form-control" placeholder="enter your name" required="">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label>Last name <span class="font-danger">*</span></label>
                            <input type="text" id ="lname" class="form-control" placeholder="enter your surname" required="">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label>Gender<span class="font-danger" id ="gender">*</span></label>
                            <div class="dropdown">
                                <span class="dropdown-toggle font-rubik" data-bs-toggle="dropdown"><span>Gender</span> <i class="fas fa-angle-down"></i></span>
                                <div class="dropdown-menu text-start">
                                    <a class="dropdown-item" href="javascript:void(0)">Male</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Female</a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label>Phone number <span class="font-danger">*</span></label>
                            <input type="number" id ="phone_number" class="form-control" placeholder="enter your mobile number" required="">
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label>Date of birth <span class="font-danger">*</span></label>
                            <input class="form-control" id ="dob" placeholder="18 april" id="datepicker" />
                        </div>
                        <div class="form-group col-md-4 col-sm-6">
                            <label>Email Address <span class="font-danger">*</span></label>
                            <input type="email" id ="email" class="form-control" placeholder="enter your email" required="">
                        </div>
                        <div class="form-group col-sm-12">
                            <label>Description</label>
                            <textarea class="form-control" id ="descrption" rows="2"></textarea>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Address</label>
                            <input type="text" id ="address" class="form-control" placeholder="Enter your Address">
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Zip code</label>
                            <input type="number" id ="zip_code" class="form-control" placeholder="Enter pin code">
                        </div>
                    </form>
                    <div class="form-btn">
                        <button type="button" id ="add-btn"  class="btn btn-pill btn-gradient color-4">Submit</button>
                        <button type="button" class="btn btn-pill btn-dashed color-4">Cancel</button>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid end -->
<!-- <script type="text/javascript">


$(document).ready(function() 
{
$("#add-btn").click(function() 
{
var fname = $('#fname').val();
var lanme = $('#lanme').val();
var gender = $('#gender').val();
var email = $('#email').val();
var descrption = $('#descrption').val();
var address = $('#address').val();
var zip_code = $('#zip_code').val();

	if(fname!="" && lanme!="" && gender!="" && email!="" && descrption!="" && address!="" && zip_code!="")
	{
		jQuery.ajax({
		type: "POST",
		url: "<?php// echo base_url('/index.php/AjaxController/savedata'); ?>",
		dataType: 'html',
		data: {name: name, email: email,course:course},
		success: function(res) 
		{
			if(res==1)
			{
			alert('Data saved successfully');	
			}
			else
			{
			alert('Data not saved');	
			}
			
		},
		error:function()
		{
		alert('data not saved');	
		}
		});
	}
	else
	{
	alert("pls fill all fields first");
	}

});
});
</script> -->
</div>
</body>
</html>