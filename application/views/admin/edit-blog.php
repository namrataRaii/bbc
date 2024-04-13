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
                        <h4 class="mb-sm-0">Edit Blog</h4>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" id="imageForm" action="<?php echo base_url('Admin/blog/update'); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    
                                    <div class="col-sm-12 mt-1">
                                        <div class="form-group">
                                            <label for="">Description</label>
                                            <textarea class="form-control summernote" name="gallery_description" id=""><?= $blogs->gallery_description ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-1">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Uploaded Date</label>
                                                <input type="datetime-local" class="form-control" name="uploaded_date" value="value="<?= $blogs->uploaded_date ?>"">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Urls</label>
                                                <input type="text" class="form-control" name="url" value="<?= $blogs->url ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 mt-1">
                                        <div class="form-group">
                                            <label class="control-label font-weight-600">Blog
                                                Title</label>
                                            <input type="text" class="form-control" id="" name="gallery_title" value="<?= $blogs->gallery_title ?>">

                                            <input type="hidden" class="" id="" name="galleryid" value="<?= $blogs->id ?>">
                                            <?php echo form_error('stime', '<div class="error">', '</div>'); ?>
                                        </div>

                                    </div>
                                    <div class="col-sm-4 mt-1">
                                        <div class="form-group">
                                            <label class="control-label font-weight-600">Blog
                                                Thumbnail</label>
                                            <div class="p-image my-2">
                                                <input class="file-upload form-control" name="gallery_thumbnail" type="file" accept="image/*">
                                            </div>
                                            <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Change Gallery Picture" data-bs-original-title="" src="<?= base_url('uploads/' . $blogs->gallery_thumbnail) ?>" alt="" height="150" width="200">

                                        </div>
                                    </div>
                                    <div class="col-sm-4 mt-1">
                                        <div class="form-group">
                                            <label class="control-label font-weight-600">Blog
                                                Image</label>
                                            <?php
                                            $allimages = explode(",", $blogs->gallery_images);
                                            foreach ($allimages as $image) { ?>


                                                <div class="p-image my-2">
                                                    <input class="file-upload form-control" name="image" type="file" accept="image/*">
                                                </div>
                                                <img data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Change Gallery Picture" data-bs-original-title="" src="<?= base_url('uploads/' . $image) ?>" alt="" height="150" width="200">

                                            <?php } ?>
                                        </div>

                                    </div>

                                </div>
                                <div class="row m-2">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-md-12" style="display: flex;justify-content: end;">
                                                <button class="mt-3 btn btn-primary  p-2 m-1 form-btn" id="videoBtn">SAVE <i class="fa fa-spin fa-spinner" id="videoSpin" style="display:none;"></i></button>
                                                <button class="mt-3 btn btn-danger m-1 p-2 form-btn" id="">
                                                    <a class="text-white" href="<?= base_url('Admin/gallery') ?>">Cancel</a></button>
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
    <?php include 'footer.php';?>