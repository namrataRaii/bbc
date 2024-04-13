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
                        <h4 class="mb-sm-0">Job</h4>
                        <a href="<?= base_url('Admin/job/add') ?>">
                            <button class="btn btn-primary">ADD JOB</button>
                        </a>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="loader-container">
                                <div class="loader"></div>
                            </div>
                            <div class="table-responsive">
                                <table id="" class="table table-bordered dt-responsive nowrap"
                                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Sr No</th>
                                            <th>Designation</th>
                                            <th>Location</th>
                                            <th>Experience</th>
                                            <th>Duration</th>
                                            <!-- <th class="text">Status</th> -->
                                            <th>Action</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php $sr = 1;
                                        foreach ($job as $jobs) {
                                            ?>
                                            <tr>
                                                <td class="heightMaintain">
                                                    <?= $sr ?>
                                                </td>

                                                <td>
                                                    <?= $jobs->job_designation ?>
                                                </td>
                                                
                                                <td>
                                                    <?= $jobs->job_location ?>
                                                </td>
                                                <td>
                                                    <?= $jobs->job_experience ?>
                                                </td>

                                                <td>
                                                    <?= $jobs->job_duration ?>
                                                </td>
                                                

                                                <!-- <td>
                                                    <?php
                                                    if ($jobs->status == 'Published') {
                                                        echo " 
                                                    <div class='dropdown d-inline-block event-dropdown'>
                                                    <button type='button' class='btn text-dark waves-effect'
                                                        id='page-header-event-dropdown' data-bs-toggle='dropdown'
                                                        aria-haspopup='true' aria-expanded='false'>
                                                        <div class='badge bg-success-subtle text-success font-size-12'><i class='fa fa-spin fa-spinner' style='display:none' id='PendingSpin" . $jobs->id . "'></i>Active</div>
                                                        </span>
                                                        <i class='mdi mdi-chevron-down  d-xl-inline-block'></i>
                                                    </button>
                                                    <div class='dropdown-menu dropdown-menu-end'>
                                                        
                                                        <a class='dropdown-item' style='cursor:pointer;' onclick='sendevent(\"" . $jobs->id . "\", \"PendingSpin" . $jobs->id . "\", \"/pending\")'> Inactive</a> 
                                                    </div>
                                                </div>";
                                                    } else {
                                                        echo "<div class='dropdown d-inline-block event-dropdown'>
                                                    <button type='button' class='btn text-dark waves-effect'
                                                        id='page-header-event-dropdown' data-bs-toggle='dropdown'
                                                        aria-haspopup='true' aria-expanded='false'>
                                                        <span class=' d-xl-inline-block ms-1'>
                                                        <div class='badge bg-danger-subtle text-danger font-size-12'><i class='fa fa-spin fa-spinner' style='display:none' id='eventSpin" . $jobs->id . "'></i> Inactive</div>
                                                        </span>
                                                        <i class='mdi mdi-chevron-down  d-xl-inline-block'></i>
                                                    </button>
                                                    <div class='dropdown-menu dropdown-menu-end'>
                                                    <a class='dropdown-item' style='cursor:pointer;' onclick='sendevent(\"" . $jobs->id . "\", \"eventSpin" . $jobs->id . "\", \"/new\")'> Active</a>


                                                        
                                                    </div>
                                                </div>";
                                                    }
                                                    ?>

                                                </td> -->
                                                <td class="text-xs-center">
                                                    <div class='dropdown d-inline-block event-dropdown'>
                                                        <button type='button' class='btn text-dark waves-effect'
                                                            id='page-header-event-dropdown' data-bs-toggle='dropdown'
                                                            aria-haspopup='true' aria-expanded='false'>
                                                            <span class=' d-xl-inline-block ms-1'>
                                                                <div class='badge bg-info-subtle text-info  font-size-12'><i
                                                                        class="ri-settings-2-line"></i></div>
                                                            </span>
                                                            <i class='mdi mdi-chevron-down  d-xl-inline-block'></i>
                                                        </button>
                                                        <div class='dropdown-menu dropdown-menu-end'>
                                                            <!-- <a class='dropdown-item' href='#'> <i class="ri-pencil-fill"></i>
                                                            Edit</a> -->
                                                            <!-- <a style="cursor:pointer" class='dropdown-item'
                                                            href="#">
                                                            <i class="mdi mdi-eye-outline"></i> view</a> -->
                                                            <a style="cursor:pointer" class='dropdown-item'
                                                                onclick="fullViewOfjob('<?php echo base64_encode($jobs->id) ?>')">
                                                                <i class="ri-pencil-line"></i> Edit</a>
                                                            <a style="cursor:pointer" class='dropdown-item'
                                                                onclick="deleteData('<?= $jobs->id ?>','tbl_job')">
                                                                <i class="mdi mdi-trash-can-outline"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <?php $sr++;
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div> <!-- container-fluid -->
    </div>
    <?php include 'footer.php';?>