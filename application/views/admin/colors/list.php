<?php $this->view('admin/includes/header'); ?>
<div class="page-header d-flex justify-content-between">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Courses</h4>
    </div>
    <div class="page-rightheader">
        <div class="btn-list">
            <a href="<?php echo base_url(); ?>admin/course/add" class="btn btn-primary"><i class="fe fe-plus"></i> Add Details</a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="">
                    <table class="ColorsTable table table-bordered table-striped table-responsive" style="width: 100%">
                        <thead>
                            <tr>
                                <th style="width: 10%">S.No</th>
                                <th style="width: 50%">Course Name</th>
                                <th style="width: 20%">Categories</th>
                                <th style="width: 20%">Short Notes</th>
                                <th style="width: 20%">For Whom</th>
                                <th style="width: 20%">Details Links</th>
                                <th style="width: 20%">Images</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($colors as $key => $item) { ?>
                                <tr>
                                    <td><?php echo ($key + 1); ?></td>
                                    <td><?php echo $item['name']; ?></td>
                                    <td><?php echo $item['categories']; ?></td>
                                    <td><?php echo $item['for_whom']; ?></td>
                                    <td><?php echo $item['short_note']; ?></td>
                                    <td><?php echo $item['dateails_link']; ?></td>
                                    <td><?php echo $item['image']; ?></td>


                                   
                                    <td>
                                        <a href="<?php echo base_url() . 'colors/edit/' . $item['id']; ?>" class="btn btn-icon btn-warning"><i class="fe fe-edit"></i></a>
                                        <button type="button" class="remove-color-btn btn btn-icon btn-danger" value="<?php echo $item['id']; ?>"><i class="fe fe-trash"></i></button>
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
<script src="<?php echo base_url(); ?>admin_assets/app/js/colors/list.js?version=<?php echo uniqid(); ?>"></script>
<script src="<?php echo base_url(); ?>admin_assets/app/js/colors/delete.js?version=<?php echo uniqid(); ?>"></script>