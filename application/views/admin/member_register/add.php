<?php $this->view('admin/includes/header'); ?>
<div class="page-header d-flex justify-content-between">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Courses</h4>
    </div>
    <div class="page-rightheader text-right">
        <div class="btn-list">
            <a href="<?php echo base_url(); ?>admin/member_register" class="btn btn-primary"><i class="fe fe-arrow-left"></i> Go Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Register</h3>
            </div>
            <div class="card-body pb-2">
                <form>
                    <div class="row row-sm">
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">First Name <span class="text-danger">*</span></label>
                            <input class="fname form-control" type="text" />
                            <span class="fname_name_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter the first name *</span>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Last Name<span class="text-danger">*</span></label>
                            <input class="lname form-control" type="text" />
                            <span class="lname_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter the last name *</span>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Gender<span class="text-danger">*</span></label>
                            <input class="gender form-control" type="text" />
                            <span class="gender_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter Categories_error *</span>
                        </div>
                    </div>
                    <div class="row row-sm mt-4">
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Phone Number<span class="text-danger">*</span></label>
                            <input class="phone_number form-control" type="tel" />
                            <span class="phone_number_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter who want this class *</span>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Date Of Birth<span class="text-danger">*</span></label>
                            <input class="dob form-control" type="date" />
                            <span class="dob_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter who want this class *</span>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Email Address<span class="text-danger">*</span></label>
                            <input class="email form-control" type="email" />
                            <span class="email_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter who want this class *</span>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Address<span class="text-danger">*</span></label>
                            <textarea class="address form-control"></textarea>
                            <span class="address_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter notes *</span>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Pin Code<span class="text-danger">*</span></label>
                            <textarea class="pincode form-control"></textarea>
                            <span class="details_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter link *</span>
                        </div>
                    </div>
                    <div class="row row-sm mt-2">
                        <div class="col-lg-12 mb-2 text-right">
                            <button type="button" class="add-btn btn btn-primary"><i class="fe fe-save"></i>Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->view('admin/includes/footer'); ?>
<script src="<?php echo base_url(); ?>admin_assets/app/js/member_register/add.js?version=<?php echo uniqid(); ?>"></script>