<?php $this->view('includes/header'); ?>
<div class="page-header d-flex justify-content-between">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Customers</h4>
    </div>
    <div class="page-rightheader text-right">
        <div class="btn-list">
            <a href="<?php echo base_url(); ?>customers" class="btn btn-primary"><i class="fe fe-arrow-left"></i> Go Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Customer</h3>
            </div>
            <div class="card-body pb-2">
                <form>
                    <div class="row row-sm">
                        <div class="col-lg-6 mb-2">
                            <label class="form-label">Customer Name <span class="text-danger">*</span></label>
                            <input class="name form-control" type="text" value="<?php echo $customer->name; ?>">
                            <span class="name_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter customer name *</span>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label class="form-label">Phone Number <span class="text-danger">*</span></label>
                            <input class="phone_number form-control" type="text" value="<?php echo $customer->phone_number; ?>">
                            <span class="phone_number_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter phone number *</span>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-6 mb-2">
                            <label class="form-label">Address <span class="text-danger">*</span></label>
                            <textarea class="address form-control"><?php echo $customer->address; ?></textarea>
                            <span class="address_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter address *</span>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-12 mb-2 text-right">
                            <button type="button" class="edit-customer-btn btn btn-primary" value="<?php echo $customer->id; ?>">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->view('includes/footer'); ?>
<script src="<?php echo base_url(); ?>assets/app/js/customers/edit.js?version=<?php echo uniqid(); ?>"></script>