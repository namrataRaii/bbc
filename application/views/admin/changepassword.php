<?php include 'header.php';?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    b {
        font-weight: 500 !important;
    }
</style>
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
             <!-- start page title -->
             <div class="row py-4">
                <div class="col-12 pb-2">
                    <div class="row align-items-center text-center">
                    <img class="logo logo-light m-auto" src="<?= base_url('assets') ?>/images/logo.png" alt="logo-dark" style="width:250px;">
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
            <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12 text-center">
                                    <h2 class="card-title fw-bold fs-4">Change Password</h2>
                                    
                                </div>
                            </div>
                            <form method="post" id="imageForm" action="<?php echo base_url('Admin/changepassword'); ?>">
                                <div class="row">
                                  
                                            <div class="col-sm-12">
                                                <label>Current Password *</label>
                                                <input type="text" class="form-control" name="current_password">
                                                <?php echo form_error('current_password', '<div class="error">', '</div>'); ?>
                                            </div>
                                            <div class="col-sm-12">
                                                <label>New Password *</label>
                                                <input type="text" class="form-control" name="new_password">
                                                <?php echo form_error('new_password', '<div class="error">', '</div>'); ?>
                                            </div>
                                            <div class="col-sm-12">
                                                <label>Confirm Password *</label>
                                                <input type="text" class="form-control" name="confirm_password">
                                                <?php echo form_error('confirm_password', '<div class="error">', '</div>'); ?>
                                            </div>

                                </div>
                                <div class="row m-2">
                                    <div class="col-md-12">
                                        <button class="mt-3 btn btn-primary  p-2 form-btn" id="videoBtn">SAVE <i
                                                class="fa fa-spin fa-spinner" id="videoSpin"
                                                style="display:none;"></i></button>
                                        <button class="mt-3 btn btn-danger  p-2 form-btn" id=""><a class="text-white"
                                                href="<?= base_url('Admin/changepassword') ?>">Cancel</a></button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
</div>
<?php include 'footer.php';?>