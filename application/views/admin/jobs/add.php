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
                            <input class="customer_id form-control" type="text" />                            
                            <span class="customer_id_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please select customer *</span>
                        </div>
                        <div class="col-lg-4 mb-4">
                            <label class="form-label"> Date <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg>
                                    </div>
                                </div>
                                <input class="job_date form-control form-control-sm" type="text">
                            </div>
                            <span class="job_date_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please select job date *</span>
                        </div>
                        <!-- <div class="col-lg-4 mb-4">
                            <label class="form-label">Job Complete Date <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg>
                                    </div>
                                </div>
                                <input class="job_complete_date form-control form-control-sm" type="text">
                            </div>
                            <span class="job_complete_date_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please select job complete date *</span>
                        </div> -->
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
                        <!-- <div class="col-lg-4 mb-4">
                            <label class="form-label">Strip Size <span class="text-danger">*</span></label>
                            <input class="strip_size form-control" type="text" />
                            <span class="strip_size_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter strip size *</span>
                        </div> -->
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-6 mb-4">
                            <label class="form-label">Notes<span class="text-danger">*</span></label>
                            <textarea class="notes form-control"></textarea>
                            <span class="notes_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter notes *</span>
                        </div>
                    </div>
                    <!-- <div class="row row-sm">
                        <div class="col-lg-12 mt-4">
                            <table class="job-sizes-table table table-bordered table-striped table-responsive">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th>S.No</th>
                                        <th>ART</th>
                                        <th>Color</th>
                                        <?php foreach ($job_sizes as $job_size) { ?>
                                            <th><?php echo $job_size; ?></th>
                                        <?php } ?>
                                        <th>Total Pairs</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="serial_number">1</td>
                                        <td>
                                            <input type="text" class="art_number form-control" maxlength="10">
                                        </td>
                                        <td>
                                            <select class="color_id form-control select2-show-search" data-placeholder="Choose One">
                                                <option value=""></option>
                                                <?php foreach ($colors as $key => $item) { ?>
                                                    <option value="<?php echo $item['id']; ?>"><?php echo $item['name']; ?></option>
                                                <?php } ?>
                                            </select>
                                            <span class="color_id_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please select color *</span>
                                        </td>
                                        <?php foreach ($job_sizes as $job_size) { ?>
                                            <td>
                                                <input type="text" class="job_qty form-control" maxlength="5">
                                            </td>
                                        <?php } ?>
                                        <td>
                                            <input class="total_pairs form-control" maxlength="5" disabled="">
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="remove-job-size-btn btn btn-icon btn-danger"><i class="fe fe-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-right" colspan="<?php echo (count($job_sizes) + 3); ?>" style="vertical-align: middle;"><b>Total</b></td>
                                        <td>
                                            <input class="final_total_pairs form-control" maxlength="5" disabled="">
                                        </td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row row-sm">
                        <div class="col-lg-12">
                            <button type="button" class="add-job-size-btn btn btn-info btn-sm"><i class="fe fe-plus"></i> Add More</button>
                        </div>
                    </div>
                    <div class="row row-sm mt-6">
                        <div class="col-lg-6">
                            <label class="form-label">Remarks <span class="text-danger">*</span></label>
                            <textarea class="remarks form-control"></textarea>
                            <span class="remarks_error" style="font-size: 12px; color: red; margin-top: 5px; display: none;">Please enter remarks *</span>
                        </div>
                    </div> -->
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