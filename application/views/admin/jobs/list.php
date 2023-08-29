<?php $this->view('admin/includes/header'); ?>
<div class="page-header d-flex justify-content-between">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Jobs</h4>
    </div>
    <div class="page-rightheader">
        <div class="btn-list">
            <a href="<?php echo base_url(); ?>admin/job/add" class="btn btn-primary"><i class="fe fe-plus"></i> Add Job</a>
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
                                <th style="width: 25%">Date</th>
                                <th style="width: 35%">Photos</th>
                                <th style="width: 20%">Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jobs as $key => $item) { ?>
                                <tr>
                                    <td><?php echo ($key + 1); ?></td>
                                    <td><?php echo 'JOB' . sprintf('%05d', $item['id']); ?></td>
                                    <td>
                                        <?php
                                        $job_date = new DateTime($item['job_date']);
                                        echo $job_date->format('d-m-Y');
                                        ?>
                                    </td>
                                    <td>
                                        <?php foreach ($customers as $key3 => $item2) { ?>
                                            <?php echo $item2['id'] === $item['customer_id'] ? $item2['name'] : ''; ?>
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo base_url(); ?>jobs/download/<?php echo $item['id']; ?>" target="_blank" class="btn btn-icon btn-danger"><i class="fe fe-download"> Download</i></a>
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
