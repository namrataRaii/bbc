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
                        <h4 class="mb-sm-0">Events</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" id="imageForm" action="<?php echo base_url('Admin/events'); ?>"
                                enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label font-weight-600">Event
                                                        Type</label>
                                                    <select class="form-control fn-15 ht-45" name="event_type"
                                                        style="appearance: auto;" required>
                                                        <!-- <option value="">Select Event Type</option> -->
                                                        <option value="Workshop">Workshop</option>
                                                        <option value="Webinar">Webinar
                                                        </option>
                                                        <option value="Training Programs">Training Programs</option>
                                                    </select>
                                                    <?php echo form_error('event_type', '<div class="error">', '</div>'); ?>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label font-weight-600">URL</label>
                                                    <input type="text" class="form-control" name="event_url" required>
                                                    <?php echo form_error('url', '<div class="error">', '</div>'); ?>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-sm-12">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label font-weight-600">Event
                                                            Image</label>
                                                        <input type="file" name="event_image" class="form-control"
                                                            accept=".jpg,.png,.jpeg,.gif" required />
                                                        <?php echo form_error('image', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label font-weight-600">Thumbnail
                                                            Event Image</label>
                                                        <input type="file" name="event_thumbnail" class="form-control"
                                                            accept=".jpg,.png,.jpeg,.gif" required />
                                                        <?php echo form_error('validate_thumbnail_img', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mt-1">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label font-weight-600">Event
                                                            Title</label>
                                                        <input type="text" class="form-control datetimepicker" id=""
                                                            name="event_title" required>
                                                        <?php echo form_error('stime', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-1">
                                                    <div class="form-group">
                                                        <label class="control-label font-weight-600">Event
                                                            Location</label>
                                                        <input type="text" class="form-control datetimepicker" id=""
                                                            name="event_location" required>
                                                        <?php echo form_error('etime', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 mt-1">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label class="control-label font-weight-600">Start
                                                            Date</label>
                                                        <input type="text" class="form-control datetimepicker"
                                                            id="datetime-s" name="event_stime" required>
                                                        <?php echo form_error('stime', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 mt-1">
                                                    <div class="form-group">
                                                        <label class="control-label font-weight-600">End
                                                            Date</label>
                                                        <input type="text" class="form-control datetimepicker"
                                                            id="datetime-e" name="event_etime" required>
                                                        <?php echo form_error('etime', '<div class="error">', '</div>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 mt-1">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label for="">Description</label>
                                                        <textarea class="form-control summernote"
                                                            name="event_description" id=""></textarea>
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
                                                        href="<?= base_url('Admin/events') ?>">Cancel</a></button>
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