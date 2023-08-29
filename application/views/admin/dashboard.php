<?php $this->view('admin/includes/header'); ?>
<div class="page-header d-flex justify-content-between">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Dashboard</h4>
    </div>
</div>
<div class="row">
    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden dash1-card border-0 bg-primary-transparent">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="">
                            <span class="fs-14 font-weight-normal">Blogs</span>
                            <h2 class="mb-2 number-font carn1 font-weight-bold text-primary"><?= $jobs ?></h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
                        <div class="mx-auto text-right">
                            <div id="spark1"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden dash1-card border-0 bg-success-transparent">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="">
                            <span class="fs-14">Courses</span>
                            <h2 class="mb-2 mt-1 number-font carn2 font-weight-bold text-success"><?= $customers ?></h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
                        <div class="mx-auto text-right">
                            <div id="spark2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
        <div class="card overflow-hidden dash1-card border-0 bg-warning-transparent">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-6">
                        <div class="">
                            <span class="fs-14">Up coming courses</span>
                            <h2 class="mb-2 mt-1 number-font carn2 font-weight-bold text-warning"><?= $colors ?></h2>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-6 my-auto mx-auto">
                        <div class="mx-auto text-right">
                            <div id="spark3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
</div>
<?php $this->view('admin/includes/footer'); ?>