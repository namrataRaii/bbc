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
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Jobs</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" id="imageForm" action="<?php echo base_url('Admin/job'); ?>"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label font-weight-600">Job
                                                        Experience</label>
                                                    <select class="form-control fn-15 ht-45" name="job_experience"
                                                        style="appearance: auto;" required>
                                                        <!-- <option value="">Select Event Type</option> -->
                                                        <option value="1+ Experience">1+ Experience </option>
                                                        <option value="2+ Experience">2+ Experience </option>
                                                        <option value="3+ Experience">3+ Experience </option>
                                                        <option value="4+ Experience">4+ Experience </option>
                                                        <option value="5+ Experience">5+ Experience </option>
                                                        <option value="6+ Experience">6+ Experience </option>
                                                       
                                                    </select>
                                                    <?php echo form_error('job_experience', '<div class="error">', '</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label font-weight-600">Designation</label>
                                                    <input type="text" class="form-control" name="job_designation" >
                                                    <?php echo form_error('job_designation', '<div class="error">', '</div>'); ?>
                                                </div>
                                            </div>

                                        </div>
                                       

                                        <div class="col-sm-12 mt-1">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label font-weight-600">Job Location
                                                            </label>
                                                        <input type="text" class="form-control " id=""
                                                            name="job_location" >
                                                        <?php echo form_error('job_location', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-1">
                                                    <div class="form-group">
                                                        <label class="control-label font-weight-600">Job
                                                            Duration</label>
                                                        <input type="text" class="form-control " id=""
                                                            name="job_duration" >
                                                        <?php echo form_error('job_duration', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     

                                        
                                    </div>

                                </div>
                                <div class="row m-2">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="mt-3 btn btn-primary  p-2 form-btn" id="videoBtn">SAVE <i
                                                        class="fa fa-spin fa-spinner" id="videoSpin"
                                                        style="display:none;"></i></button>
                                                <button class="mt-3 btn btn-danger  p-2 form-btn" id=""><a
                                                        class="text-white"
                                                        href="<?= base_url('Admin/job') ?>">Cancel</a></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>


                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <!-- <a class='dropdown-item' style='cursor:pointer;' onclick='sendPublication(\"" . $user->id . "\", \"PendingSpin" . $user->id . "\",\"".'\pending'."\")'> Inactive</a> -->
    <!-- End Page-content -->
    <?php include 'footer.php';?>