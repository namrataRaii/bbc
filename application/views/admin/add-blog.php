<?php include 'header.php';?>
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://coderthemes.com/ubold/layouts/assets/libs/dropzone/min/dropzone.min.css">

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Blog</h4>
                        <a href="javascript:history.back();">

                            <button class="btn btn-outline-primary">back</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row mt-2">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <form method="post" id="imageForm" action="<?php echo base_url('Admin/blog'); ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-12 mt-1">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="control-label font-weight-600">Blog
                                                        Title</label>
                                                    <input type="text" class="form-control datetimepicker" id="" name="gallery_title" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 mt-1">
                                                <div class="form-group">
                                                    <label class="control-label font-weight-600">Blog
                                                        Thumbnail</label>
                                                    <input type="file" class="form-control dropify" id="" name="gallery_thumbnail" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-1">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="image-upload">
                                                    <!-- <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                            data-upload-preview-template="#uploadPreviewTemplate">
                                            <div class="fallback">
                                                <input name="file" type="file" multiple />
                                            </div>

                                            <div class="dz-message needsclick">
                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                <h3>Drop files here or click to upload.</h3>
                                                <span class="text-muted font-13">(This is just a demo dropzone. Selected files are
                                                    <strong>not</strong> actually uploaded.)</span>
                                            </div>
                                        </form> -->

                                                    <!-- Preview -->
                                                    <!-- <div class="dropzone-previews mt-3" id="file-previews"></div> -->
                                                    <label for="file-input">
                                                        Select Images
                                                    </label>
                                                    <input type="file" class="form-control dropify" name="gallery[]" id="file-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-1">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label>Uploaded Date</label>
                                                <input type="datetime-local" class="form-control" name="uploaded_date">
                                            </div>
                                            <div class="col-sm-6">
                                                <label>Urls</label>
                                                <input type="text" class="form-control" name="url">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-1">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <textarea class="form-control summernote" name="gallery_description" id=""></textarea>
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
                                        <button class="mt-3 btn btn-primary  p-2 form-btn" id="videoBtn">SAVE <i class="fa fa-spin fa-spinner" id="videoSpin" style="display:none;"></i></button>
                                        <button class="mt-3 btn btn-danger  p-2 form-btn" id=""><a class="text-white" href="<?= site_url('Admin/blog') ?>">Cancel</a></button>
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