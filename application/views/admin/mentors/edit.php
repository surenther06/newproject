<?php $this->view('admin/includes/header'); ?>
<div class="page-header d-flex justify-content-between">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">blogs</h4>
    </div>
    <div class="page-rightheader text-right">
        <div class="btn-list">
            <a href="<?php echo base_url(); ?>admin/jobs" class="btn btn-primary"><i class="fe fe-arrow-left"></i> Go Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Blogs</h3>
            </div>
            <div class="card-body pb-2">

                <form>
                    <div class="row row-sm">
                        <div class="col-lg-6 mb-2">
                            <label class="form-label">college Name <span class="text-danger">*</span></label>
                            <input class="college_name form-control" type="text" value = "<?php echo $jobs->college_name ?>">
                            <span class="college_name_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter college name *</span>
                        </div>
                        <div class="col-lg-6 mb-2">
                            <label class="form-label">Short notes <span class="text-danger">*</span></label>
                            <textarea class="short_notes form-control"><?php echo $jobs->city_name ?></textarea>
                            <span class="short_notes_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter short notes *</span>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-6 mb-2">
                            <label class="form-label">City Name<span class="text-danger">*</span></label>
                            <textarea class="city_name form-control"><?php echo $jobs->city_name ?></textarea>
                            <span class="city_name_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter short notes *</span>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label">Upload Image <span class="text-danger">*</span></label>
                            <input type="file" class="upload_image form-control" id="upload_image" accept="image/png, image/jpg, image/jpeg" />
                            <span class="upload_image_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please upload course image image *</span>
                            <span class="upload_image_invalid_format" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Invalid file format only upload .jpg, .jpeg, .png file *</span>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-12 mb-2 text-right">
                            <button type="button" class="edit-and-update-btn btn btn-primary" value="<?php echo $jobs->id; ?>">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->view('admin/includes/footer'); ?>
<script src="<?php echo base_url(); ?>admin_assets/app/js/jobs/edit.js?version=<?php echo uniqid(); ?>"></script>