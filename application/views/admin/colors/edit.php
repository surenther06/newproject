<?php $this->view('includes/header'); ?>
<div class="page-header d-flex justify-content-between">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Colors</h4>
    </div>
    <div class="page-rightheader text-right">
        <div class="btn-list">
            <a href="<?php echo base_url(); ?>colors" class="btn btn-primary"><i class="fe fe-arrow-left"></i> Go Back</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Color</h3>
            </div>
            <div class="card-body pb-2">
                <form>
                    <div class="row row-sm">
                        <div class="col-lg-6 mb-2">
                            <label class="form-label">Color Name <span class="text-danger">*</span></label>
                            <input class="name form-control" type="text" value="<?php echo $color->name; ?>">
                            <span class="name_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter color name *</span>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-12 mb-2 text-right">
                            <button type="button" class="edit-color-btn btn btn-primary" value="<?php echo $color->id; ?>">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $this->view('includes/footer'); ?>
<script src="<?php echo base_url(); ?>assets/app/js/colors/edit.js?version=<?php echo uniqid(); ?>"></script>