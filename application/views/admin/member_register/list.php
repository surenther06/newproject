<?php $this->view('admin/includes/header'); ?>
<div class="page-header d-flex justify-content-between">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Register</h4>
    </div>
    <div class="page-rightheader">
        <div class="btn-list">
            <a href="<?php echo base_url(); ?>admin/member_register/add" class="btn btn-primary"><i class="fe fe-plus"></i> Register here </a>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="">
                    <table class="Members_register_table table table-bordered table-striped table-responsive" style="width: 100%">
                        <thead>
                            <tr>
                                <th style="width: 10%">S.No</th>
                                <th style="width: 50%">Fname</th>
                                <th style="width: 20%">Lname</th>
                                <th style="width: 20%">gender</th>
                                <th style="width: 20%">phone_number</th>
                                <th style="width: 20%">date_of_birth</th>
                                <th style="width: 20%">email_address</th>
                                <th style="width: 20%">address</th>
                                <th style="width: 20%">zip_code</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($member_register as $key => $item) { ?>
                                <tr>
                                    <td><?php echo ($key + 1); ?></td>
                                    <td><?php echo $item['fname']; ?></td>
                                    <td><?php echo $item['lname']; ?></td>
                                    <td><?php echo $item['gender']; ?></td>
                                    <td><?php echo $item['phone_number']; ?></td>
                                    <td><?php echo $item['date_of_birth']; ?></td>
                                    <td><?php echo $item['email_address']; ?></td>
                                    <td><?php echo $item['address']; ?></td>
                                    <td><?php echo $item['zip_code']; ?></td>                                   
                                    <td>
                                        <!-- <a href="<?php// echo base_url() . 'colors/edit/' . $item['id']; ?>" class="btn btn-icon btn-warning"><i class="fe fe-edit"></i></a> -->
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
<script src="<?php echo base_url(); ?>admin_assets/app/js/member_register/list.js?version=<?php echo uniqid(); ?>"></script>
<script src="<?php echo base_url(); ?>admin_assets/app/js/member_register/delete.js?version=<?php echo uniqid(); ?>"></script>