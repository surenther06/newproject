<?php $this->view('admin/includes/header'); ?>
<div class="page-header d-flex justify-content-between">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Courses</h4>
    </div>
    <div class="page-rightheader text-right">
        <div class="btn-list">
            <a href="<?php echo base_url(); ?>admin/course" class="btn btn-primary"><i class="fe fe-arrow-left"></i> Go Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Add Course</h3>
            </div>
            <div class="card-body pb-2">
                <form>
                    <div class="row row-sm">
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Course Name <span class="text-danger">*</span></label>
                            <input class="college_name form-control" type="text" />
                            <span class="college_name_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter the name *</span>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Categories<span class="text-danger">*</span></label>
                            <input class="Categories form-control" type="text" />
                            <span class="Categories_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter Categories_error *</span>
                        </div>
                    </div>
                    <div class="row row-sm mt-4">
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">For Whom<span class="text-danger">*</span></label>
                            <input class="for_whom form-control" type="text" />
                            <span class="for_whom_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter who want this class *</span>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Upload Image<span class="text-danger">*</span></label>
                            <input type="file" class="image form-control" id="job_image" accept="image/png, image/jpg, image/jpeg" />
                            <span class="image_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please upload job image *</span>
                            <span class="image_invalid_format" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Invalid file format only upload .jpg, .jpeg, .png file *</span>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Short Notes<span class="text-danger">*</span></label>
                            <textarea class="notes form-control"></textarea>
                            <span class="notes_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter notes *</span>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Details links<span class="text-danger">*</span></label>
                            <textarea class="details form-control"></textarea>
                            <span class="details_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter link *</span>
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
<script src="<?php echo base_url(); ?>admin_assets/app/js/colors/add.js?version=<?php echo uniqid(); ?>"></script>