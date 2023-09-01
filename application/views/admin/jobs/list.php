<?php $this->view('admin/includes/header'); ?>
<div class="page-header d-flex justify-content-between">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Blogs</h4>
    </div>
    <div class="page-rightheader">
        <div class="btn-list">
            <a href="<?php echo base_url(); ?>admin/job/add" class="btn btn-primary"><i class="fe fe-plus"></i> Add Details</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="">
                    <table class="JobsTable table table-bordered table-striped table-responsive" style="width: 100%">
                        <thead>
                            <tr>
                                <th style="width: 10%">S.No</th>
                                <th style="width: 25%">College Name</th>
                                <th style="width: 25%">city name</th>
                                <th style="width: 35%">Notes</th>
                                <th style="width: 20%">Photos</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($jobs as $key => $item) { ?>
                                <tr>
                                    <td><?php echo ($key + 1); ?></td>
                                    <td><?php echo $item['college_name']; ?></td>
                                    <td><?php echo $item['description']; ?></td>
                                    <td><?php echo $item['city_name']; ?></td>
                                    <td><?php echo $item['image']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url() . '/jobs/edit/' . $item['id']; ?>" class="btn btn-icon btn-warning"><i class="fe fe-edit"></i></a>
                                        <button type="button" class="remove-jobs-btn btn btn-icon btn-danger" value="<?php echo $item['id']; ?>"><i class="fe fe-trash"></i></button>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->view('admin/includes/footer'); ?>
<script src="<?php echo base_url(); ?>admin_assets/app/js/jobs/list.js?version=<?php echo uniqid(); ?>"></script>
<script src="<?php echo base_url(); ?>admin_assets/app/js/jobs/delete.js?version=<?php echo uniqid(); ?>"></script>
