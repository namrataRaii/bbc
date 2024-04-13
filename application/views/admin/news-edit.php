<?php include 'header.php';?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-12" style="display: flex;justify-content: space-between;">
                                    <h4 class="card-title">News</h4>
                                    <a href="javascript:history.back();">

                                        <button class="btn btn-outline-primary">back</button>
                                    </a>
                                </div>
                            </div>
                            <form method="post" id="imageForm" action="<?php echo base_url('Admin/news/update'); ?>">
                                <div class="row">
                                    <!-- <div class="col-sm-8 main-width-box w-100" id="l-section-list"> -->
                                    <div class="col-sm-12 main-width-box w-100" id="l-section-list">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <textarea class="form-control news" name="news_description" id=""
                                                        required><?= $news->news_description ?></textarea>
                                                        <?php echo form_error('news_description', '<div class="error">', '</div>'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <label>Start Time</label>
                                                <input type="datetime-local" class="form-control" name="start_date"
                                                    value="<?= $news->start_date ?>">
                                                    <?php echo form_error('start_date', '<div class="error">', '</div>'); ?>
                                            </div>

                                            <div class="col-sm-6">
                                                <label>End Time</label>
                                                <input type="hidden" name="news_id" value="<?= $news->id ?>">
                                                <input type="datetime-local" class="form-control" name="end_date"
                                                    value="<?= $news->end_date ?>">
                                                    <?php echo form_error('end_date', '<div class="error">', '</div>'); ?>
                                            </div>


                                        </div>
                                    </div>


                                    <!-- <div class="col-sm-3 border me-3 d-n" style="float: right;width: 29%;border: 1px solid #ccc;margin-right: 25px;" id="r-section-list"> -->

                                </div>
                                <div class="row m-2">
                                    <div class="col-md-12">
                                        <button class="mt-3 btn btn-primary  p-2 form-btn" id="videoBtn">SAVE <i
                                                class="fa fa-spin fa-spinner" id="videoSpin"
                                                style="display:none;"></i></button>
                                        <button class="mt-3 btn btn-danger  p-2 form-btn" id=""><a class="text-white"
                                                href="<?= base_url('Admin/news') ?>">Cancel</a></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
</div>
<!-- <a class='dropdown-item' style='cursor:pointer;' onclick='sendevent(\"" . $event->id . "\", \"PendingSpin" . $event->id . "\",\"".'\pending'."\")'> Inactive</a> -->
<!-- End Page-content -->
<?php include 'footer.php';?>