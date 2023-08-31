<?php $this->view('admin/includes/header'); ?>
<div class="page-header d-flex justify-content-between">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Blogs</h4>
    </div>
    <div class="page-rightheader text-right">
        <div class="btn-list">
            <a href="<?php echo base_url(); ?>jobs" class="btn btn-primary"><i class="fe fe-arrow-left"></i> Go Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Blogs</h3>
            </div>
            <div class="card-body pb-2">
                <form>
                    <div class="row row-sm">
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">College Name <span class="text-danger">*</span></label>
                            <input class="college_name form-control" type="text" />
                            <span class="customer_id_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please select customer *</span>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label"> Date <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                            <path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z" />
                                            <path d="M4 5.01h16V8H4z" opacity=".3" />
                                        </svg>
                                    </div>
                                </div>
                                <input class="job_date form-control form-control-sm" type="text">
                            </div>
                            <span class="job_date_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please select job date *</span>
                        </div>

                    </div>
                    <div class="row row-sm mt-4">
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">City Name <span class="text-danger">*</span></label>
                            <input class="style_number form-control" type="text" />
                            <span class="style_number_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter style number *</span>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Upload Image <span class="text-danger">*</span></label>
                            <input type="file" class="job_image form-control" id="job_image" accept="image/png, image/jpg, image/jpeg" />
                            <span class="job_image_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please upload job image *</span>
                            <span class="job_image_invalid_format" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Invalid file format only upload .jpg, .jpeg, .png file *</span>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Notes<span class="text-danger">*</span></label>
                            <textarea class="notes form-control"></textarea>
                            <span class="notes_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter notes *</span>
                        </div>
                    </div>
                    <div class="row row-sm mt-2">
                        <div class="col-lg-12 mb-2 text-right">
                            <button type="button" class="add-job-btn btn btn-primary"><i class="fe fe-save"></i> Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->view('admin/includes/footer'); ?>
<script src="<?php echo base_url(); ?>admin_assets/app/js/jobs/add.js?version=<?php echo uniqid(); ?>"></script>